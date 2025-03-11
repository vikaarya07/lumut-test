<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Post";
        $posts = Post::where('user_id', auth()->id())->latest()->paginate(10);

        return view('dashboard.posts.index', compact('title', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Post";

        return view('dashboard.posts.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $title = "Post";

        return view('dashboard.posts.edit', compact('title', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/admin/posts')->with('success', 'Post berhasil dihapus!');
    }
}
