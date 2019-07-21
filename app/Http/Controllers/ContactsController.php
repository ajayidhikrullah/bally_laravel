<?php

namespace App\Http\Controllers;
use \App\Contact;

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
        //Contact is in model
        $contact = new Contact; //this is instantiation in OOP
        //call the Contact model properties
        //set the fields to what d user typed in
        $contact->fullname = request('full_name');
        $contact->email = request('user_mail');
        $contact->subject = request('subject');
        $contact->body = request('message');

        //save it to d db
        $contact->save();
        //and then redirect to the home page
        return redirect('contact');
        // firstly (die and dump)
        // dd(request(['user_mail']));
    }



}
