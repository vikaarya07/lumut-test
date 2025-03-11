<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    public function index()
    {
        $title = "Post";
        $posts = Post::latest()->paginate(10);

        return view('dashboard.posts.index', compact('title', 'posts'));
    }

    public function create()
    {
        $title = "Post";

        return view('dashboard.posts.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:posts,title',
            'content' => 'required|string'
        ]);

        Post::create([
            'title' => $validatedData['title'],
            'slug' => Str::slug($validatedData['title']),
            'content' => $validatedData['content'],
            'user_id' => Auth::id(),
        ]);

        return redirect('/admin/posts')->with('success', 'Post berhasil ditambahkan');
    }

    public function edit(Post $post)
    {
        $title = "Edit Post";

        return view('dashboard.posts.edit', compact('title', 'post'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|string|max:255|unique:posts,title,' . $post->id,
            'content' => 'sometimes|string'
        ]);

        $post->update([
            'title' => $validatedData['title'] ?? $post->title,
            'slug' => isset($validatedData['title']) ? Str::slug($validatedData['title']) : $post->slug,
            'content' => $validatedData['content'] ?? $post->content,
        ]);

        return redirect('/admin/posts')->with('success', 'Post berhasil diperbarui');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/admin/posts')->with('success', 'Post berhasil dihapus!');
    }
}
