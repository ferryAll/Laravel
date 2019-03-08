<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;



class ContactController extends Controller
{
    public function contact() {
 
        $contact_email = App\Contact::where('contact_email')->first();
        $contact_name = App\Contact::where('contact_name');
        $contact_message = App\Contact::where('contact_message');
        
        return view('layouts/contact');
        }
}
