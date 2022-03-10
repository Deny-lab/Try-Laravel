<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();

        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('post', [
            'title' => 'All Posts',
            // 'posts' => Post::all()
            'posts' => $posts->paginate(4)
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
