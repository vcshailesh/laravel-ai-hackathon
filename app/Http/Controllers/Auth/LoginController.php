<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
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
