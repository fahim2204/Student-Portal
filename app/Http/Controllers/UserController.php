<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Slink;
use App\Models\Post;


class UserController extends Controller
{
    public function view(Request $req, $uname){
        $tempUser = User::where('uname', $uname)
                ->first();;
        $slinks = Slink::where('fr_user_id', $tempUser->id)->get();
        $posts = PostController::all()->where('fr_user_id', $tempUser->id);
        // $post = Post::with('comment', 'vote')->where('fr_user_id', $tempUser->id)
        //                             ->get();
        $user = User::with($tempUser->type)->where('uname', $uname)->first();
        //dd($user);
        return view('profile.view')->with('user',$user)
                                    ->with('type',$tempUser->type)
                                    ->with('posts',$posts)
                                    ->with('slinks',$slinks);
    }
    public function edit(){
        return view('profile.edit');
    }
}
