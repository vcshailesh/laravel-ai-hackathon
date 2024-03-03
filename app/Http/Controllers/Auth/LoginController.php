<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        return view('auth.login');
    }

    /**
     * @return mixed
     */
    public function store(LoginRequest $request)
    {
        try {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->route('admin.dashboard');
            }

            // Optionally, you can redirect the user to a success page
            return redirect()->route('admin.login');
        } catch (Exception $ex) {
            Log::error($ex->getMessage());
        }
    }

    public function logout()
    {
        try {
            Auth::logout();

            return redirect()->route('admin.login');
        } catch (Exception $ex) {
            Log::error($ex->getMessage());
        }
    }
}
