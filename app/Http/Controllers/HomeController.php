<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index() {
        View::share('quote', 'so you see what topics you still need to review');
        View::share('title', 'Quiz yourself');
        return view('pages.home');
    }
}
