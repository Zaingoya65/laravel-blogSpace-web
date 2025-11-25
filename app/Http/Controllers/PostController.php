<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('admin.index'); 
    }

    public function store(Request $request)
    {
        // Validate
        $validated = $request->validate([
            'blogTitle' => 'required|string|max:255',
            'blog_body' => 'required|string',
            'blogCategory' => 'nullable|string|max:50',
            'blogImage' => 'nullable|image|max:5120', // max 5MB
        ]);

        $imgUrl = null;
        if ($request->hasFile('blogImage')) {
            $path = $request->file('blogImage')->store('posts', 'public');
            $imgUrl = '/storage/' . $path;
        }

        Post::create([
            'img_url' => $imgUrl,
            'category' => $validated['blogCategory'] ?? null,
            'title' => $validated['blogTitle'],
            'blog_body' => $validated['blog_body'],
        ]);

        return redirect('view');
    }

    // for view posts - admin
    public function view(){
        $posts = Post::all();
        // $data = compact('post');
        return view('admin.view', ['post' => $posts]);
    }

     // for home page posts 
    public function home(){
        $posts = Post::all();
        // $data = compact('post');
        return view('/', ['post' => $posts]);
    }
}