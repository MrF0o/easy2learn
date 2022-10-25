<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    function __construct()
    {
        $this->middleware('guest');
    }

    function create(Request $request) {
        $validated = $request->validate([
            'password' => 'min:6|required|confirmed',
            'email' => 'email|required',
            'username' => 'required|max:12',
            'terms_agreement' => 'accepted'
        ]);


        $pass = Hash::make($validated['password']);
        $validated['password'] = $pass;

        $user = User::create($validated);

        $user->filter()->create();

        $user->save();

        auth()->login($user);

        return redirect()->route('dashboard')->with('success', "Account successfully created.");
    }
}
