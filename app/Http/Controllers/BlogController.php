<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class BlogController extends Controller
{
    //
    public function create()
    {
        return view('frontend.user.blog');
    }


    //this is my new blog homepage
    public function home()
    {
        return view('layouts.posts.home');
    }


    public function storePost()
    {
        $post = new Post;
        $post->error = request('error');
        $post->feedback = request('feedback');
        $post->save();
        return redirect('blog');

    }

    public function showPost()
    {
        $posts = Post::all();
        return view('frontend.user.blog')->with('posts', $posts);

    }




}
