<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Moderator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class UserController extends Controller
{
    public function all()
    {
        $users = User::all();
        return $users;
    }
    public function view($uname){
        return view('profile.view')->with('uname',$uname);
    }
    public function edit(){
        return view('profile.edit');
    }
    public function changeRole(Request $req)
    {
        $user = User::where('id', (int)$req->input('id'))->with($req->input('prev_type'))->first();
        $user_details = null;
        $new_user = null;
        if($req->input('prev_type') === 'admin') {
            $user_details = $user->admin;
        } else if($req->input('prev_type') === 'moderator') {
            $user_details = $user->moderator;
        }  else if($req->input('prev_type') === 'instructor') {
            $user_details = $user->instructor;
        }  else if($req->input('prev_type') === 'student') {
            $user_details = $user->student;
        }

        if($req->input('type') === 'admin') {
            $new_user = new Admin();
        } else if($req->input('type') === 'moderator') {
            $new_user = new Moderator();
        }  else if($req->input('type') === 'instructor') {
            $new_user = new Instructor();
        }  else if($req->input('type') === 'student') {
            $new_user = new Student();
        }

        $new_user->contact = $user_details->contact;
        $new_user->email = $user_details->email;
        $new_user->name = $user_details->name;
        $new_user->image = $user_details->image;
        $new_user->fr_user_id = $user_details->fr_user_id;
        $new_user->save();
        $user_details->delete();

        $user->type = $req->input('type');
        $user->timestamps = false;
        $user->update();

        return redirect()->route('moderator.users.view', ['id' => $req->input('id')]);
    }
    public function delete($id)
    {
        User::where('id', $id)->delete();
        return back();
    }
    public function ban($id)
    {
        $user = User::where('id', $id)->first();
        $user->status = 2;
        $user->timestamps = false;
        $user->update();
        return back();
    }
    public function unban($id)
    {
        $user = User::where('id', $id)->first();
        $user->status = 1;
        $user->timestamps = false;
        $user->update();
        return back();
    }
}
