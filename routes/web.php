<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MCPController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::view('/how-it-works', 'pages.about')->name('about');
Route::view('/benefits', 'pages.benefits')->name('benefits');
Route::view('/pricing', 'pages.pricing')->name('pricing');
Route::view('/login', 'pages.login')->name('login');
Route::view('/register', 'pages.register')->name('register');
Route::get('/mcp', [MCPController::class, 'index'])->name('mcp');

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::post('/register', 'RegisterController@create')->name('auth.register');
    Route::post('/login', 'LoginController@login')->name('auth.login');
    Route::post('/logout', 'LogoutController@logout')->name('auth.logout');
});