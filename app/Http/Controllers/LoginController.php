<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function Index()
    {
        return view('login.index');
    }
    public function Verify(Request $req)
    {

        $user = User::where('uname', $req->input('uname'))
            ->first();
        $password = $req->input('password');
        // $type = $user->type;
        // $name = User::with($type)->where('uname',$req->input('uname'))->first();
        // dd($user);

        if ($user !== null) {
            $type = $user->type;
            $name = User::with($type)->where('uname', $req->input('uname'))->first();

            if ($user->password === $password) {
                // if(Hash::check($req->input('password'))){

                $req->session()->put('uname', $user->uname);
                $req->session()->put('id', $user->id);
                $req->session()->put('type', $user->type);
                $req->session()->put('status', $user->status);
                $req->session()->put('name', $name->$type->name);
                return redirect()->route('home');

                // }
            } else {

                $req->session()->flash('error', 'Invalid username or password!');
                // return redirect('/login');
                return redirect()->route('login.index');
            }
        } else {
            $req->session()->flash('error', 'Invalid username or password!');
            // return redirect('/login');
            return redirect()->route('login.index');
        }

        // dd($users);
        // ->where('password','=',$req->password);
        // have to add type and status
        // ->where();
        // if($user!==null){
        //     $req->session()->put('uname', $req->uname);
        //     $req->session()->put('type', $req->type);
        //     //set session or cookie
        //     return redirect()->route('home');
        // }
        // else{

        //     $req->session()->flash('error', 'Invalid username or password!');
        //     // return redirect('/login');
        //     return redirect()->route('login.index');
        // }


    }
}
