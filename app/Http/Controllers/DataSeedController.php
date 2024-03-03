<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Spatie\PdfToText\Pdf;

class DataSeedController extends Controller
{
    /**
     * @return View;
     */
    public function index(): View
    {
        return view('backend.data-seed.index');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function storeUploadFile(Request $request)
    {
        $file = $request->file('file');
        $fileName = str_replace(' ', '_', $file->getClientOriginalName());
        $fileModifyName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();
        $filePath = '/uploads/company_information/';
        $uploadDetails = $this->uploadFile($file, $filePath, $fileModifyName);

        $textPDF = $this->pdfToTextConvert($uploadDetails['uploaded_path'].$uploadDetails['file_name']);

        return redirect()->route('admin.data-seed.index');
    }

    /**
     * @param  $request
     * @param  string  $fileName
     * @param  string  $oldFileName
     */
    private function uploadFile($file, string $uploadPath, $fileName = '', $oldFileName = ''): array
    {
        $response = [];
        try {
            if (!empty($fileName)) {
                $fileName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();
            } else {
                $fileName = time() . '.' . $file->getClientOriginalExtension();
            }
            $destinationPath = $uploadPath;
            if (!empty($oldFileName)) {
                $this->deleteFile($destinationPath, $oldFileName);
            }

            Storage::disk('public')->put($destinationPath . '/' . $fileName, file_get_contents($file));

            $response = [
                'file_name' => $fileName,
                'uploaded_path' => $destinationPath,
            ];
        } catch (\Exception $ex) {
            Log::error($ex);
        }

        return $response;
    }

    /**
     * @param  string  $oldFileName
     */
    private function deleteFile(string $destinationPath, $oldFileName = ''): bool
    {
        try {
            Storage::disk('public')->delete($destinationPath . '/' . $oldFileName);
        } catch (\Exception $ex) {
            Log::error($ex);
        }

        return true;
    }

    private function pdfToTextConvert($file)
    {
        return (new Pdf())
            ->setPdf($file)
            ->text();
    }
}
