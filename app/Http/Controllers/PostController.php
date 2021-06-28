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
    public function viewall()
    {
        return view('posts.all');
    }
    public function createview()
    {
        $category = category::orderBy('name','asc')->get();
        return view('posts.create-post')->with('catall',$category);
    }
    public function create()
    {
        ///


        //return redirect(posts.view.single)
    }
    // IMPLEMENTing
    public function catwiseview($cat)
    {
        return view('posts.catview')->with('category', $cat);
    }
    public function singleview($cat, $id)
    {

        $post = Post::with('category', 'user')->where('id', $id)->first();
        $upcount = Vote::where('status', '=', '1')
            ->where('fr_post_id', '=', $post->id)->count();
        $downcount = Vote::where('status', '=', '2')
            ->where('fr_post_id', '=', $post->id)->count();
        $count = $upcount - $downcount;

        $comments = commentController::allComment($post->id);

        return view('posts.single')->with('post',$post)
                                   ->with('count',$count)
                                   ->with('comments',$comments);

    }
    //NOT IMPLEMENTED YET
    public function edit($cat, $id)
    {
        return view('posts.edit')->with('category', $cat)
            ->with('id', $id);
    }
    public static function all()
    {
        $post = Post::with('category', 'comments', 'votes')->get();
        return $post;
    }
}
