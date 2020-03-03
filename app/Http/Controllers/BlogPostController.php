<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        //render a list of a resource
        $posts = BlogPost::latest()->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(BlogPost $post)
    {
        return view('posts.show', ['post' => $post]);
    }
}
