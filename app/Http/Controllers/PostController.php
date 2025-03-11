<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = "Post";
        $posts = Post::with('user')->latest()->paginate(8);
        return view('posts', compact('title', 'posts'));
    }

    public function show(Post $post)
    {
        $title = "Post";
        $post->load('user');

        return view('post', compact('title', 'post'));
    }
}
