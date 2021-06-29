<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = PostController::all()->take(6);
        return view('home')->with('posts',$posts);
    }
    public function search(Request $req){
        return redirect()->route('posts.view.search',$req->search);
    }
}
