<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostsController extends Controller
{



    public function index(Post $post)
    {
        $posts = $post->with('user','category')->paginate(15);
        return view('posts.index',compact('posts'));
    }

    public function show(Post $post)
    {

        return view('posts.show',compact('post'));
    }
}
