<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    //
    public function show(Post $post)
    {
        return view('post',[
            'post' => $post
        ]);
    }
    public function postComment(Request $request)
    {
        // return 'test';
        if(empty(auth()->user())){
            // return Redirect::back()->with('status', 'Plz login to comment on post');
            return redirect('/login')->with('status', 'Please login before commenting on a post');
        }
        $attributes = $request->validate([
            'message' => ['required']
        ]);
        $attributes['post_id'] = $request->post_id;
        $attributes['user_id'] = Auth::id();
        Comment::create($attributes);
        return Redirect::back()->with('status','Comment posted successfully');
    }
}
