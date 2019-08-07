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

        $category = Category::all();
        return view('layouts.category.home', compact('category'));
    }
    
    public function create()
    {
        $category = Category::all();
        return view('layouts.category.create', compact('category'));
    }

    public function store()
    {
        //create a new post using d requets data
            // // dd(request(['category', 'title']));
            // $category = new Category;
            // $category->title = request('title');
            // $category->category = request('category');
            
            // OR
        // before creating a post, lets vaidate
        $this->validate(request(), 
        [
            'title' => 'required',
            'category' => 'required',
        ]);

            Category::create(request([
            
                
                'title',
                'category',

            ]));



        //redirect
            return redirect('/home');

    }


    public 
}
