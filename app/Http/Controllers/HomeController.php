<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = PostController::all()->take(6);
        return view('home')->with('posts',$posts);
    }
}
