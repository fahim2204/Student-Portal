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

    public function update(editRequest $req){
       
        // $user = User::where('uname', $req->session()->get('uname'))
        // ->first();
    
    // $type = $user->type;
    // $name = User::with($type)->where('uname',$req->input('uname'))->first();
    // dd($user);

    
        // $type = $user->type;
        

        $type=$req->session()->get('type');
            //dd($type);
        if($type=='moderator'){
            moderator::where('fr_user_id',$req->session()->get('id'))
            ->update([
                'name' => $req->name,
                'email' => $req->email,
                'address' => $req->address,
                'updated_at' => Carbon::now(),
                'contact' => $req->contact
            ]);
        
            $req->session()->flash('msg', 'Update Successful');
            return redirect()->route('profile.edit');
            //return view('profile.edit');
        }  

        elseif($type=='instructor'){
            student::where('fr_user_id',$req->session()->get('id'))
            ->update([
                'name' => $req->name,
                'email' => $req->email,
                'address' => $req->address,
                'updated_at' => Carbon::now(),
                'contact' => $req->contact
            ]);
        
            $req->session()->flash('msg', 'Update Successful');
            return redirect()->route('profile.edit');
            //return view('profile.edit');
        }

        elseif($type=='student'){
            student::where('fr_user_id',$req->session()->get('id'))
            ->update([
                'name' => $req->name,
                'email' => $req->email,
                'address' => $req->address,
                'updated_at' => Carbon::now(),
                'contact' => $req->contact
            ]);
        
            $req->session()->flash('msg', 'Update Successful');
            return redirect()->route('profile.edit');
            //return view('profile.edit');
        }

        elseif($req->newpass!=null){
            if($req->newpasse==$req->confirmpass){
                    $user = User::where('uname', $req->session()->get('uname'))
                    ->first();
                    $password = $user->password;

                        if($req->oldpass==$password){
                            user::where('fr_user_id',$req->session()->get('id'))
                            ->update([
                                'password' => $req->newpass    
                            ]);
                            $req->session()->flash('msg', 'Update Successful');
                            return redirect()->route('profile.edit');
                        }
                        else{
                            $req->session()->flash('error', 'Unauthorized Access');
                            return redirect()->route('profile.edit');
                        }
                    
            
            }
            else{
                $req->session()->flash('error', 'Confirm New Password Correctly');
                return redirect()->route('profile.edit');
            }

        }
        else{
            $req->session()->flash('error', 'Check Again');
            return redirect()->route('profile.edit');
        }

    }

}
