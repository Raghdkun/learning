<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Handle registration logic here
        // Validate input, save to database, etc.

        return redirect()->back()->with('success', 'Registration successful!');
    }

    public function login(Request $request)
    {
        // Handle login logic here
        // Validate input, authenticate user, etc.

        return redirect()->back()->with('success', 'Login successful!');
    }
}
