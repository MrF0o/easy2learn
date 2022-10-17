<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MCPController;
use App\Http\Controllers\QAController;
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
Route::post('/mcp/questions/store', [QAController::class, 'store'])->name('question.store');
Route::get('/mcp/questions/list', [QAController::class, 'list'])->name('question.list');
Route::post('/mcp/questions/sort', [QAController::class, 'reorder'])->name('question.reorder');
Route::post('/mcp/questions/delete', [QAController::class, 'delete'])->name('question.delete');
Route::get('/mcp/questions/{id}', [QAController::class, 'get'])->name('question.get');
Route::post('/mcp/questions/search', [QAController::class, 'search'])->name('question.search');
Route::get('/mcp/{any?}', [MCPController::class, 'index'])->where('any', '.*')->name('mcp.any');


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::post('/register', 'RegisterController@create')->name('auth.register');
    Route::post('/login', 'LoginController@login')->name('auth.login');
    Route::post('/logout', 'LogoutController@logout')->name('auth.logout');
});