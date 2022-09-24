<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view('loginPage');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        if(auth()->attempt($attributes))
        {
            session()->regenerate();//good security practice to regenerate session id everytime user is logged in.
            
            session()->flash('success', 'You have successfully logged in!');
            return redirect('/');
        }

        return back()->withInput()->withErrors(['email'=>'Your provided credentials could not be verified.']);
    }

    public function destroy()
    {
        auth()->logout();

        session()->flash('success', 'You have been logged out!');
        return redirect('/');
    }
}
