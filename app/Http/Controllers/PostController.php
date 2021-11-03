<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //
    public function index() 
    {
        $posts = Post::all();

        return view('posts.index', ["posts" => $posts]);
    }

    public function edit(Post $post) 
    {
        return view("posts.edit", ["post" => $post]);
    }

    public function update(Post $post) 
    {
        $post->update([
            "title" => request('title'),
            "content" => request('content')
        ]);

        return redirect("/posts");
    }

    public function getCreate()
    {
        return view("posts.createPage");
    }

    public function create()
    {
        Post::create([
            "title" => request("title"),
            "content" => request("content")
        ]);

        return redirect("/posts");
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect("/posts");
    }
}
