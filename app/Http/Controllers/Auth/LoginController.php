<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
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
     * Authentication
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->route('admin.data-seed.index');
            }

        } catch (Exception $ex) {
            Log::error($ex->getMessage());
        }

        return redirect()->route('admin.login');
    }

    /**
     * Logout the login user.
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        try {
            Auth::logout();
        } catch (Exception $ex) {
            Log::error($ex->getMessage());
        }

        return redirect()->route('admin.login');
    }
}
