<?php

use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home');
Route::controller(LoginController::class)
    ->as('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('login', 'index')->name('login');
});
