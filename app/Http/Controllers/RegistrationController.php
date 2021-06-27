<?php

namespace App\Http\Controllers;

use App\Http\Requests\modRegistrationRequest;
use Illuminate\Http\Request;
use App\Models\moderator;
use App\Models\User;
use Illuminate\Support\Carbon;


class RegistrationController extends Controller
{
    public function studentindex(){
        return view('registration.student');
    }
    public function instructorindex(){
        return view('registration.instructor');
    }
    public function moderatorindex(){
        return view('registration.moderator');
    }
    public function studentverify(Request $req){
        //
    }
    public function instructorverify(Request $req){
        //
    }
    public function moderatorverify(modRegistrationRequest $req){


        $imgName = $req->uname.'.'.$req->image->getClientOriginalExtension();
        user::insert([
            'uname' => $req->input('uname'),
            'password' => $req->password,
            'type' => 'moderator',
            'status' => 4,
            'created_at' => Carbon::now()

        ]);
        //Last Id of user table
        $getUser = user::orderby('id', 'desc')->first();
        $lastId = $getUser['id'];
        moderator::insert([
            'name' => $req->fullName,
            'email' => $req->email,
            'created_at' => Carbon::now(),
            'contact' => $req->contact,
            'address' => $req->address,
            'image' => $req->uname.'.'.$req->image->getClientOriginalExtension(),
            'fr_user_id' => $lastId
        ]);

            $file = $req->file('image');
            $file->move('upload',$imgName);



        $req->session()->flash('msg', 'Registration Application Successful');
        return redirect()->route('login.index');
    }
}
