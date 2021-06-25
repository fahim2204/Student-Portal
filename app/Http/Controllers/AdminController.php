<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function posts(){
        return view('admin.posts.all');
    }
    public function postscreate(){
        return view('admin.posts.create');
    }
    public function webinfo(){
        return view('admin.websiteinfo');
    }
}
