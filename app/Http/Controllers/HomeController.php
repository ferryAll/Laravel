<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $posts = \App\Post::orderBy('post_date', 'desc')->limit(3)->get(); //get all posts
        // var_dump($posts)
        return view ('welcome', ['posts' => $posts]);
    }

    


}
