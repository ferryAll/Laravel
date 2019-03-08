<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
 
        $contact_email = App\Get::where('contact_email')->first();
        $contact_name = App\Get::where('contact_name');
        $contact_message = App\Get::where('contact_message');
        
        }
}
