<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    // firtly load a view
    public function create()
    {
        return view ('frontend.user.signup.');
    }

}
