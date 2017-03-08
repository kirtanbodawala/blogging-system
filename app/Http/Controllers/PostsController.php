<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index ()
    {
        return view('posts.index');
    }

    public function create ()
    {
        return view('posts.create');
    }
    public function store ()
    {
//        dd(request()->title);
//    Create a new post using a request data
//        $post = new Post;
//        $post->title = request('title');
//        $post->body = request('body');
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create(request([
            'title',
            'body'
        ]));

//    Save it to the database
//        $post->save();
//    Return to the homepage
        return redirect('/posts');
//      return view('posts.create');
    }
}
