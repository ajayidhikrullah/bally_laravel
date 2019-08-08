<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class BlogController extends Controller
{
    //
    public function balBlog()
    {
        $categories = new Category;
        $categories = Category::all();
        return view('frontend.user.blog')->with('categories', $categories);
    }




    public function storePost()
    {
        // $post = new Post;
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
