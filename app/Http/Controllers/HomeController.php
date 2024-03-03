<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the the chatboat
     *
     */
    public function index()
    {
        return view('home');
    }
}
