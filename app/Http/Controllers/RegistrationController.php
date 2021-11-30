<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller {
    // Redirect to the Registration Form
    public function create() {
        return view('register.create');
    }

    // Register the new User
    public function store() {
        //var_dump(request()->all());
        $validatedData = request()->validate([
            'name' => ['required' , 'max:30'],
            'email' => ['required', 'email', 'max:40', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8']
        ]);

        $user = User::create($validatedData);
        Auth::login($user);
        //session()->flash('success', 'The New User has been created');
        // Below the shorthand alternative to sending a flash message (using 'with')
        return redirect('/')->with('success', 'The New User has been created');
    }
}
