<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use Illuminate\Support\Facades\Redirect;


class CommentController extends Controller
{
    //
    public function create($request)
    {
        // return 'test';
        if (empty(auth()->user())) {
            // return Redirect::back()->with('status', 'Plz login to comment on post');
            return redirect('/login')->with('status', 'Please login before commenting on a post');
        }
        $attributes = $request->validate([
            'message' => ['required']
        ]);
        $attributes['post_id'] = $request->post_id;
        $attributes['user_id'] = Auth::id();
        Comment::create($attributes);
        return Redirect::back()->with('status', 'Comment posted successfully');
    }
}
