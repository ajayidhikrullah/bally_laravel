<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    //this is my new blog homepage
    public function home()
    {
        return view('layouts.posts.home');
    }
    
    public function create()
    {
        return view('layouts.posts.create');
    }

    public function store()
    {
        //create a new post using d requets data
            // dd(request(['category', 'title']));
            $category = new Category;
            $category->title = request('title');
            $category->category = request('category');

        //save to db
        $category->save();


        //redirect
            return redirect('/home');

    }
}
