<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
    
    }
    
    function createPosts(){
        $table->id('id');
        $table->date('post_date');
        $table->string('post_title');
        $table->text('post_content');
        $table->timestamps();
    }
}
