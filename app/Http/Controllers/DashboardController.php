<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('backend.dashboard');
    }
}
