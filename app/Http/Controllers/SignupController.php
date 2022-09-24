<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function create()
    {
        return view('signupPage');

    }


    public function store()
    {
        $attributes=request()->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|max:255|min:3'
        ]);

    
        $user = User::create($attributes);

        auth()->login($user);

        session()->flash('success', 'Your account has been created!');

        return redirect('/');
    }
}
