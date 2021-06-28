<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function view(Request $req, $uname){
        $tempUser = User::where('uname', $uname)
                ->first();;
        $user = User::with($tempUser->type)->where('uname', $uname)->first();
        //dd($user);
        return view('profile.view')->with('user',$user)
                                    ->with('type',$tempUser->type);
    }
    public function edit(){
        return view('profile.edit');
    }
}
