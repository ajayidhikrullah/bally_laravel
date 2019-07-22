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
        //validate the form
        // $this->validate(request(), 
        // [
        //     'name'=> 'required',
        //     'fname'=> 'required',
        //     'email' => 'required|email',
        //     'password' => 'required'

        // ]);

        $user = new User;
        $user->name = request('name');
        $user->fname = request('fname');
        $user->email= request('email');
        $user->password = request('pwd');        


        // create and ave d user
            $user->save();
        //sign he user in

        return redirect('contact');

        //redirect

        
    }

}
