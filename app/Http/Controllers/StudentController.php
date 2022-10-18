<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $count = (int)$request->count;

        if($count < 999) {
            return User::all()->take($count);
        } else {
            return User::all();
        }
    }

    public function count() {
        return response()->json([
            'count' => \Illuminate\Support\Facades\DB::table('users')->count()
        ]);
    }
}
