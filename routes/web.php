<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MCPController;
use App\Http\Controllers\QAController;
use App\Http\Controllers\StudentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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

Route::get('/how-it-works', function () {
    View::share('title', 'Say out loud what you want to learn');
    View::share('quote', 'While mentally rehearsing is good, rehearsing out loud is even better');
    return view('pages.about');
})->name('about');

Route::get('/benefits', function () {
    View::share('title', 'Space out your review sessions');
    View::share('quote', 'You\'ll have better long-term memory if you practice frequently');
    return view('pages.benefits');
})->name('benefits');

Route::get('/pricing', function () {
    View::share('title', 'Take a 10-minute break each hour');
    View::share('quote', 'Give your brain some oxygen!');
    return view('pages.pricing');
})->name('pricing');

Route::get('/login', function () {
    View::share('title', 'Don\'t get distracted');
    View::share('quote', 'Focus on your course only');
    return view('pages.login');
})->name('login')->middleware('guest');

Route::get('/register', function () {
    View::share('title', 'Don\'t get distracted');
    View::share('quote', 'Focus on your course only');
    return view('pages.register');
})->name('register')->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/mcp', [MCPController::class, 'index'])->name('mcp');
Route::get('/backend/students', [StudentController::class, 'index'])->name('students.list');
Route::get('/backend/students/count', [StudentController::class, 'count'])->name('students.count');
Route::post('/mcp/questions/store', [QAController::class, 'store'])->name('question.store');
Route::get('/mcp/questions/list', [QAController::class, 'list'])->name('question.list');
Route::post('/mcp/questions/sort', [QAController::class, 'reorder'])->name('question.reorder');
Route::post('/mcp/questions/delete', [QAController::class, 'delete'])->name('question.delete');
Route::get('/mcp/questions/{id}', [QAController::class, 'get'])->name('question.get');
Route::post('/mcp/questions/search', [QAController::class, 'search'])->name('question.search');
Route::get('/mcp/user/filter', function () {
    if (Auth::check()) {
        return auth()->user()->filter;
    } else {
        return response([]);
    }
})->name('user.filter');

Route::post('/mcp/user/filter', function (Request $request) {
    if (Auth::check()) {
        $filter = auth()->user()->filter;

        if ($filter) {
            $filter->update([
                'show_random_questions' => $request->input('show_random_questions'),
                'hide_textarea' => $request->input('hide_textarea'),
                'hide_answers_button' => $request->input('hide_answers_button'),
                'search_based_on' => $request->input('search_based_on')
            ]);

            return $filter;
        }

        return auth()->user();
    }

    return response('Please login', 401);
})->name('user.filter.update');

Route::get('/mcp/{any?}', [MCPController::class, 'index'])->where('any', '.*')->name('mcp.any');


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::post('/register', 'RegisterController@create')->name('auth.register');
    Route::post('/login', 'LoginController@login')->name('auth.login');
    Route::post('/logout', 'LogoutController@logout')->name('auth.logout');
});
