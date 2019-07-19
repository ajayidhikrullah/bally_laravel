<?php

namespace App\Http\Controllers;
// use \App\Contact;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    public function showContact()
    {
        return view('frontend.user.contact');
    }

    public function createContact()
    {
        return view('contacts.create');

    }

    public function storeContact()
    {
        //create a new post using the request data
        //save it to d db
        //and then redirect to the home page

        // firstly (die and dump)
        dd(request(['user_mail', 2]));
    }









}
