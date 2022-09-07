<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('index',[
            'posts' => Post::all(),
            'categories' => Category::withCount('posts')->get()
        ]);
    }
}
