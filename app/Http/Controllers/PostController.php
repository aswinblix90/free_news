<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

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
    public function showPostForm()
    {
        return view('create-post',[
            'categories' => Category::all()
        ]);
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            // 'category_id' => ['required'],
            'title' => ['required'],
            'desc' => ['required'],
            'body' => ['required']
        ]);
        $attributes['user_id'] = Auth::id();
        $attributes['slug'] = Str::slug($request->title);
        $attributes['category_id'] = $request->category;
        $attributes['image'] = $request->file('image')->store('post');
        // dd($attributes);
        Post::create($attributes);
        return redirect('/')->with('status', 'Your article posted successfully');
    }
}
