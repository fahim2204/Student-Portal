<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view($uname){
        return view('profile.view')->with('uname',$uname);
    }
    public function edit($uname){
        return view('profile.edit')->with('uname',$uname);
    }
}
