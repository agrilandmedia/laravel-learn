<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller {
    public function getLogInPage() {
        return view('sessions.login');
    }

    public function store() {
        $validatedData = request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6'
        ]);

        // Attempt to Log In a User
        if (!Auth::attempt($validatedData)) {
            throw ValidationException::withMessages([
                'email', 'Provided credentials are not correct'
            ]);
        }

        session()->regenerate(); // Protects against the session fixation attack
        return redirect('/')->with('success', 'You are logged in');
    }

    public function logOut() {
        Auth::logout();
        // Logout with a flashbag message
        return redirect('/')->with('success', 'You have been logged out successfully');
    }
}
