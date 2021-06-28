<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\editRequest;
use App\Models\User;
use App\Models\Slink;
use App\Models\Post;
use App\Models\moderator;
use App\Models\Student;
use App\Models\Instructor;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function view(Request $req, $uname){
        $tempUser = User::where('uname', $uname)
                ->first();
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
    public function edit(Request $req){

        $tempUser = User::where('uname', $req->session()->get('uname'))
        ->first();
        $slinks = Slink::where('fr_user_id', $tempUser->id)->get();
        $user = User::with($tempUser->type)->where('uname', $req->session()->get('uname'))->first();
        return view('profile.edit')->with('user',$user)
        ->with('type',$tempUser->type)
        ->with('slinks',$slinks);
    }

    public function update(Request $req){
       
        $user = User::where('uname', $req->session()->get('uname'))
        ->first();
    
    // $type = $user->type;
    // $name = User::with($type)->where('uname',$req->input('uname'))->first();
    // dd($user);

    
        $type = $user->type;
        

        //$type=(string)$req->session()->get('type');
        //dd($type);
        $type::where('fr_user_id',$req->session()->get('id'))
        ->update([
            'name' => $req->fullName,
            'email' => $req->email,
            'address' => $req->address,
            'updated_at' => Carbon::now(),
            'contact' => $req->contact
        ]);
       
        $req->session()->flash('msg', 'Registration Successful');
        return redirect()->route('profile.edit');
        //return view('profile.edit');
    }
}
