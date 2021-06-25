<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewall(){
        return view('posts.all');
    }
    //NOT IMPLEMENTED YET
    public function catwiseview($cat){
        return view('posts.catview')->with('category',$cat);
    }
    public function singleview($cat, $id){
        return view('posts.single')->with('category',$cat)
                                ->with('id',$id);
    }
    //NOT IMPLEMENTED YET
    public function edit($cat, $id){
        return view('posts.edit')->with('category',$cat)
                                ->with('id',$id);
    }
}
