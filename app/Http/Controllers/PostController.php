<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            'title' => 'Posts',
            // 'posts' => Post::all()
            'posts' => Post::latest()->get()
        ]);
    }

    public function show(Post $content)
    {
        return view('content', [
            "title" => "Single Post",
            "post" => $content
        ]);
    }
}
