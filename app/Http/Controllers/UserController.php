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
use App\Models\Admin;
use App\Models\Qualification;
use Illuminate\Support\Carbon;


class UserController extends Controller
{
    public function view(Request $req, $uname)
    {
        $tempUser = User::where('uname', $uname)
            ->first();
        $slinks = Slink::where('fr_user_id', $tempUser->id)->get();

        $tempIns = Instructor::where('fr_user_id', $tempUser->id)
            ->first();

        $qalifications = Qualification::where('fr_instructor_id', $tempIns->id)->get();
        $posts = PostController::all()->where('fr_user_id', $tempUser->id);
        // $post = Post::with('comment', 'vote')->where('fr_user_id', $tempUser->id)
        //                             ->get();
        $user = User::with($tempUser->type)->where('uname', $uname)->first();
        //dd($user);
        return view('profile.view')->with('user', $user)
            ->with('type', $tempUser->type)
            ->with('posts', $posts)
            ->with('slinks', $slinks)
            ->with('qualifications', $qalifications);
    }
    public function apiGetAll()
    {
        $users = User::all();
        return response()->json($users, 200);
    }
    public function apiViewUser($id)
    {
        $user = User::where('id', $id)->with('posts', 'comments', 'admin', 'instructor', 'moderator', 'student')->first();
        return response()->json($user, 200);
    }
    public function apiDelete($id)
    {
        $user = User::find($id);
        if($user === null) {
            return response()->json('User not found', 404);
        }
        $userDetails = '';       
        
        if($user->type === 'admin') {
            $userDetails = Admin::where('fr_user_id', $user->id);
        } else if ($user->type === 'moderator') {
            $userDetails = moderator::where('fr_user_id', $user->id);
        } else if ($user->type === 'instructor') {
            $userDetails = Instructor::where('fr_user_id', $user->id);
        } else if ($user->type === 'student') {
            $userDetails = Student::where('fr_user_id', $user->id);
        } 
        $userDetails->delete();
        $user->delete();
        return response()->json($user, 200);
    }
    public function edit(Request $req)
    {
        $tempUser = User::where('uname', $req->session()->get('uname'))
            ->first();
        $slinks = Slink::where('fr_user_id', $tempUser->id)->get();
        $user = User::with($tempUser->type)->where('uname', $req->session()->get('uname'))->first();
        return view('profile.edit')->with('user', $user)
            ->with('type', $tempUser->type)
            ->with('slinks', $slinks);
    }
    public function apiBan($id)
    {
        $user = User::find($id);
        if($user === null) return response()->json('User not found', 404);
        $user->banned = 1;
        return response()->json($user, 200);
    }
    public function apiUnban($id)
    {
        $user = User::find($id);
        if($user === null) return response()->json('User not found', 404);
        $user->banned = 0;
        return response()->json($user, 200);
    }
    public function update(editRequest $req)
    {

        // $user = User::where('uname', $req->session()->get('uname'))
        // ->first();

        // $type = $user->type;
        // $name = User::with($type)->where('uname',$req->input('uname'))->first();
        // dd($user);


        // $type = $user->type;


        $type = $req->session()->get('type');
        //dd($type);
        if ($type == 'moderator') {
            moderator::where('fr_user_id', $req->session()->get('id'))
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
        } elseif ($type == 'instructor') {
            student::where('fr_user_id', $req->session()->get('id'))
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
        } elseif ($type == 'student') {
            student::where('fr_user_id', $req->session()->get('id'))
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
            if($req->newpasse===$req->confirmpass){
                    $user = User::where('uname', $req->session()->get('uname'))

      
                    ->first();
                $password = $user->password;

                if ($req->oldpass == $password) {
                    user::where('fr_user_id', $req->session()->get('id'))
                        ->update([
                            'password' => $req->newpass
                        ]);
                    $req->session()->flash('msg', 'Update Successful');
                    return redirect()->route('profile.edit');
                } else {
                    $req->session()->flash('error', 'Unauthorized Access');
                    return redirect()->route('profile.edit');
                }
            } else {
                $req->session()->flash('error', 'Confirm New Password Correctly');
                return redirect()->route('profile.edit');
            }

        }
        else{

            $req->session()->flash('error', 'Check Again');
            return redirect()->route('profile.edit');
        }
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

        return redirect()->route('admin.users.view', ['id' => $req->input('id')]);
    }
}
