<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::view('/benefits', 'pages.benefits')->name('benefits');
Route::view('/how-it-works', 'pages.about')->name('about');
Route::view('/pricing', 'pages.pricing')->name('pricing');
Route::view('/support', 'pages.support')->name('support');
Route::view('/login', 'pages.login')->name('login')->middleware('guest');
Route::view('/register', 'pages.register')->name('register')->middleware('guest');


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::post('/register', 'RegisterController@create')->name('auth.register');
    Route::post('/login', 'LoginController@login')->name('auth.login');
    Route::post('/logout', 'LogoutController@logout')->name('auth.logout');
});

// Example Routes
// Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

