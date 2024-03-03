<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        return view('auth.login');
    }
}
