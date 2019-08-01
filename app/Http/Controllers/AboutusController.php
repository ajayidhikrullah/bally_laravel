<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    //
    public function showAbout(){

        //create an array of names
        $data = array(

            'tableTopic' => 'People that know about Us',         
            'profiles' => ['Nurudeen', 'Luqman', 'Dhikrullah']
        );

        // return view('frontend.user.about', compact('tableTopic'));
        return view('frontend.user.about')->with($data);

    }
}
