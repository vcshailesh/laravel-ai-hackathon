<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the the chatboat
     *
     * @return View
     */
    public function index(): View
    {
        return view('home');
    }

    /**
     * For generate response
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function generateResponse(Request $request): JsonResponse
    {
        try {
            $userText = $request->userText;
            $apiUrl = env('GROQ_API_URL');
            $apiKey = env('GROQ_API_KEY');

            $client = new Client();
            $response = $this->getQueryFormAI($client, $apiUrl, $apiKey, $userText);

            $responseData = json_decode($response, true);
            $keywords = $responseData['choices'][0]['message']['content'];

            $keywordsArray = [];
            if (preg_match('/\[(.*?)\]/', $keywords, $matches)) {
                $keywordsArray = json_decode($matches[0], true);
            } else {
                $response = "Please provide a more detailed question. Your current question is too short and may lack sufficient information for a proper response.";
            }

            if ($responseData) {
                $whereClause = "description LIKE '%" . implode("%' OR description LIKE '%", $keywordsArray) . "%'";
                $query = "SELECT description FROM datasets WHERE " . $whereClause;
                $resultData = DB::select($query);

                if ($resultData) {
                    $paragraph = '';
                    foreach ($resultData as $data) {
                        $paragraph .= $data->description;
                    }

                    $dbResponse = $this->getResultFormat($client, $apiKey, $apiUrl, $userText, $paragraph);
                    $dbResponseData = json_decode($dbResponse, true);

                    $dbResult = $dbResponseData['choices'][0]['message']['content'];

                    return response()->json($dbResult);
                } else {
                    $response = "Sorry, I couldn't find any relevant information for your query. Please try again with different search terms.";
                }
            }
        } catch (\Exception $exception) {
            Log::error($exception);

            $response = "I'm sorry, but I'm currently experiencing some technical difficulties. I'll be back online shortly.";
        }

        return response()->json($response);
    }

    /**
     * For listen response
     */
    public function listenResponse(Request $request): JsonResponse
    {
        $responseText = $request->responseText;
        $limitedText = Str::limit($responseText, 350);

        $apiUrl = env('ELEVAN_API_URL');
        $apiKey = env('ELEVAN_API_KEY');

        $client = new Client();
        $response = $client->post($apiUrl, [
            'headers' => [
                'Content-Type' => 'application/json',
                "x-api-key" => $apiKey
            ],
            'json' => [
                'model' => 'eleven_multilingual_v2',
                'text' => $limitedText,
                'voice_settings' => [
                    'similarity_boost' => 0,
                    'stability' => 0,
                    'style' => 0,
                ]
            ],
        ]);


        if ($response->getStatusCode() == 200) {
            $audioPath = 'output.mp3';

            Storage::put($audioPath, $response->getBody(), 'public');

            $audioUrl = Storage::url($audioPath);
        }

        return response()->json($audioUrl);
    }

    /**
     * Get query form ai
     *
     * @param Client $client
     * @param string $apiUrl
     * @param string $apiKey
     * @param string $userText
     * @return mixed
     */
    private function getQueryFormAI(Client $client, string $apiUrl, string $apiKey, string $userText): mixed
    {
        $response = $client->post($apiUrl, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $apiKey,
            ],
            'json' => [
                'model' => 'mixtral-8x7b-32768',
                'messages' => [
                    ['role' => 'system', 'content' => "You are a keyword extractor, you have access to the following user's question: <br>" . $userText],
                    ['role' => 'user', 'content' => "Please provide the most important words from the user's question, without any explanations or additional context. These keywords should capture the essence of the user's question and help to focus the response. Please give these keywords in an array with out any other note."],
                ],
                'max_tokens' => 600,
                "temperature" => 0.5,
                "top_p" => 1,
            ],
        ]);

        return $response->getBody();
    }

    /**
     * Get result in format
     *
     * @param Client $client
     * @param string $apiUrl
     * @param string $apiKey
     * @param string $userText
     * @param string $paragraph
     * @return mixed
     */
    private function getResultFormat(
        Client $client,
        string $apiKey,
        string $apiUrl,
        string $userText,
        string $paragraph
    ): mixed {
        $dbResponse = $client->post($apiUrl, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $apiKey,
            ],
            'json' => [
                'model' => 'mixtral-8x7b-32768',
                'messages' => [
                    ['role' => 'system', 'content' => "You are a helpful assistant, the paragraph you are working with is:" . $paragraph],
                    ['role' => 'user', 'content' => "Formulate a answer for the following user's question: " . $userText],
                ],
                'max_tokens' => 32000,
                "temperature" => 0.7,
                "top_p" => 1,
            ],
        ]);

        return $dbResponse->getBody();
    }
}
