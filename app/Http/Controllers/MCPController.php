<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MCPController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index() {
        if (!auth()->user()->isAdmin) return response()->redirectTo('/');

        return view('mcp.dashboard');
    }
}
