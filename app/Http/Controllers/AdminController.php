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
    public function categories(){
        return view('admin.categories.all');
    }
    public function categoriescreate(){
        return view('admin.categories.create');
    }
    public function subcategories(){
        return view('admin.sub-categories.all');
    }
    public function roles(){
        return view('admin.roles');
    }
    public function users(){
        return view('admin.users.all');
    }
}
