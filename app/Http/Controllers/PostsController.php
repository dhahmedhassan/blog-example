<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        
        $this->validate(request(), [
            'title' => 'required|min:20',
            'body' => 'required'
        ]);

        Post::create(request(['title', 'body']));

        // Redirects to somewhere - Home Page -

        return redirect('/');

    }
}
