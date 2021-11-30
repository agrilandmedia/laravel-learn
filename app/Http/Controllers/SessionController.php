<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SessionController extends Controller{
    public function destroy() {
        Auth::logout();
        // Logout with a flashbag message
        return redirect('/')->with('success', 'You have been Logged Out Successfully');
    }
}
