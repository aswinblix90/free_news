<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function show()
    {
        return view('session.login');
    }
    public function create(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (auth()->attempt($attributes)) {
            return redirect('/')->with('status', 'Welcome back')->with('class', 'success');
        }else{
            return redirect()->back()->with('status','User not exists')->with('class','danger');
        }
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('status', 'Logout successfull.. See you soon')->with('class', 'info');
    }

}
