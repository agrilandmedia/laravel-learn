<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class AdminUserController extends Controller {
    // Show All Users
    public function index() {
        return view('admin.users.index', [
            'users' => User::all()
        ]);
    }

    // Redirect to User update page
    public function edit(User $user) {
        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    // Store updated User
    public function update(User $user) {
        $validatedData = $this->validateUser($user);

        $user->update($validatedData);

        return back()->with('success', 'User has been updated');
    }

    // Extracted function (avoid the code repetition)
    protected function validateUser(User $user): array {
        return request()->validate([
            'name' => ['required', 'max:30'],
            'is_admin' => ['required', 'integer'],
            'email' => ['required', 'email', 'max:40', Rule::unique('users', 'email')->ignore($user->id)]
        ]);
    }
}
