<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = PostController::all();
        return view('home')->with('posts',$posts);
    }
}
