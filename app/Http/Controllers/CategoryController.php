<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
// use App\Post;

class CategoryController extends Controller
{
    //
    //this is my new blog homepage
    public function home()
    {

        $category1 = Category::all();
        return view('layouts.category.home', compact('category1'));
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
        //valiadet ends.

            Category::create(request([
                'title',
                'category',
            ]));

        //redirect
            return redirect('/home');
    }

    public function show($id /*Category $category*/)
  
    {
        // dd($id);
        $category1 = Category::all();
        // dd($categ);
        $category3 = Category::find($id);
        // dd($category);
        // return it to the first old blog in frontend-user-blog
        // return view('frontend.user.blog')->with('categories', $categories);
        // return to a testing blog
        return view('layouts.category.show', compact(['category3', 'category1']));
    }
}