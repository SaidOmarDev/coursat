<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'max:12']
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        Auth::login(User::create($attributes));

        return redirect('/')->with('success', 'Your account has been created!');
    }
}
