<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;



class ContactController extends Controller
{
    public function contact() {
 
        return view('layouts/contact');
        }

        public function store() {
            $contact=new App\Contact;
            $contact->contact_name=request('contact_name');
            $contact->contact_email=request('contact_email');
            $contact->contact_message=request('contact_message');

            $contact->save();

            return view('message', ['message'=> "message enregistré"]); 
          
        }
}
