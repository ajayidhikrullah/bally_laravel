<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    //
    public function showAbout(){
        return view('frontend.user.about');
    }
}
