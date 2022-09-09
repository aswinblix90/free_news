<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
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
        $attributes = $request->validate([
            'message' => ['required']
        ]);
        $attributes['post_id'] = $request->post_id;
        $attributes['user_id'] = $request->user_id;
        Comment::create($attributes);
        return Redirect::back()->with('status','Comment posted successfully');
    }
}
