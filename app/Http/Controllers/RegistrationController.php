<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function Index(){
        return view('registration.index');
    }
    public function Verify(Request $req){
        //
    }
}
