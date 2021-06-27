<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\studentRegistrationRequest;
use Validator;
use App\Models\User;
use App\Models\student;
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
    public function studentverify(studentRegistrationRequest $req){

        $imgName = $req->uname.'.'.$req->image->getClientOriginalExtension();
        user::insert([
            'uname' => $req->uname,
            'password' => $req->password,
            'type' => 'student',
            'status' => 1,
            'created_at' => Carbon::now()

        ]);
        //Last Id of user table
        $getUser = user::orderby('id', 'desc')->first();
        $lastId = $getUser['id'];
        student::insert([
            'name' => $req->fullName,
            'email' => $req->email,
            'address' => $req->address,
            'created_at' => Carbon::now(),
            'contact' => $req->contact,
            'level' => $req->level,
            'image' => $req->uname.'.'.$req->image->getClientOriginalExtension(),
            'fr_user_id' => $lastId
        ]);

            $file = $req->file('image');
            $file->move('upload',$imgName);



        $req->session()->flash('msg', 'Registration Successful');
        return redirect()->route('login.index');
    
        //return view('login.index');
    }
    public function instructorverify(Request $req){
        //
    }
    public function moderatorverify(Request $req){
        //
    }
}
