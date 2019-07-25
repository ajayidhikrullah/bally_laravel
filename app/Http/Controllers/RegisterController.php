<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    //
    // firtly load a view
    public function create()
    {
        return view ('frontend.user.signup');
    }

    public function store()
    {
    //Old ways to handle this request
        // $user = new User;
        // $user->name = request('name');
        // $user->fname = request('fname');
        // $user->email= request('email');
        // $user->password = request('pwd');        

    //end of the old ways  

    //create a new post using the request data NEW METHOD
        //this automatically saves
        User::create([
            'name' => request('name'),
            'fname'=> request('fname'),
            'email'=> request('email'),
            'password'=> request('pwd'),
        ]);





    // create and ave d user
            // $user->save();
        //sign he user in

        return redirect('contact');

        
    }

}
