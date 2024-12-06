<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function show()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        validator($request->all(),[
            'email'=>['required','email'],
            'password'=>['required']
        ])->validate();

        if(auth()->attempt($request->only(['email','password'])))
        {
            return redirect()->route('dashboard.index');
        }
        return redirect()->back()->withErrors(['message'=>'email or password is incorrect']);
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login.show');
    }
}
