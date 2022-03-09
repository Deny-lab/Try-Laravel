<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            'title' => 'All Posts',
            // 'posts' => Post::all()
            'posts' => Post::with(['user', 'category'])->latest()->get()
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
