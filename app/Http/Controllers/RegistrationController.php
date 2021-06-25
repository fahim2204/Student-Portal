<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function moderatorverify(Request $req){
        //
    }
}
