<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataSeedController;
use App\Http\Controllers\HomeController;
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

Route::controller(LoginController::class)->as('admin.')->prefix('admin')->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login', 'store')->name('store');
    Route::get('logout', 'logout')->name('logout');
});


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(DataSeedController::class)
        ->prefix('data-seed')
        ->as('data-seed.')
        ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('upload', 'storeUploadFile')->name('upload');
    });
});

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::post('/chatbot', 'generateResponse')->name('chatbot');
});

