<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /*
    return the user form
    */
    public function get()
    {
        return view('UserForm');
    }
    /*
    create a new user
    */
    public function post(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = new User($validated);

        $user->save();

        return redirect('/');
    }
}