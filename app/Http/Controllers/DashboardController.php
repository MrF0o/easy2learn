<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        $count = \Illuminate\Support\Facades\DB::table('users')->count();
        return view('pages.dashboard', compact('count'));
    }
}
