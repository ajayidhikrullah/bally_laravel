<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
class NewsletterController extends Controller
{
    //


    public function footer()
    {
        return view('frontend.layouts.footer');
    }








    public function newsLetter()
    {
        $newsletter = new Newsletter;
        $newsletter->email = request('user_mail');

        $newsletter->save();
        return redirect('/');
    }
}
