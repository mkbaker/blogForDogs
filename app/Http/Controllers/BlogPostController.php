<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;

class BlogPostController extends Controller
{
    public function index(BlogPost $posts)
    {
        //laravel captures the input on the URI and passes it from the wildcard 
        //to automatically find an post with that id
        //the name of your variable has to match the wildcard in the route
        return view('posts.index', $posts);
    }
}
