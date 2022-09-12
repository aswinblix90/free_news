<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function show()
    {
        return view('session.register');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'min:12', 'max:255'],
            'username' => ['required', 'min:3', 'max:255'],
            'password' => ['required', 'min:6', 'max:255'],
            // 'thumbnail' => ['mimes:jpg,bmp,png'],
            'bio' => ['max:255']
        ]);
        $attributes['role_id'] = 2;
        $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        $user = User::create($attributes);
        Auth::login($user);
        return redirect('/')->with('status', 'Login successfull')->with('class', 'success');
    }
}
