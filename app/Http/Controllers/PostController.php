<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Vote;
use App\Models\Comment;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewall(){
        return view('posts.all');
    }
    // IMPLEMENTing
    public function catwiseview($cat){
        return view('posts.catview')->with('category',$cat);
    }
    public function singleview($cat, $id){
        // return view('posts.single')->with('category',$cat)
        //                         ->with('id',$id);
        $post = Post::with('category','user')->where('id', $id)->first();
        // return view('posts.single')->with('post',$post);
        // dd($post);

        $upcount = Vote::where('status','=','1')
                        ->where('fr_post_id','=',$post->id)->count();
        $downcount = Vote::where('status','=','2')
                          ->where('fr_post_id','=',$post->id)->count();
        $count = $upcount - $downcount;
        // $count = Carbon::now('Asia/Dhaka');

        //comment logic
        // $comments = Comment::with('user','post')
        //                     //->where('fr_post_id','=',$id)
        //                     ->first();
        //dd($comments);
        $comments = commentController::allComment($post->id);

        return view('posts.single')->with('post',$post)
                                   ->with('count',$count)
                                   ->with('comments',$comments);
    }
    //NOT IMPLEMENTED YET
    public function edit($cat, $id){
        return view('posts.edit')->with('category',$cat)
                                ->with('id',$id);
    }
}
