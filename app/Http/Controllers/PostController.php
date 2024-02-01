<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('pages.posts', compact('posts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'visibility' => 'required|in:0,1,2',
        ]);

        $post = Post::create($request->only(['title', 'category', 'content', 'visibility']));

        if ($request->hasFile('image')) {
            $imagePath = $post->saveImage($request->file('image'));
        }

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
    public function show(Post $post)
    {
        return view('pages.show', compact('post'));
    }


}
