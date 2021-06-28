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
        $category = category::orderBy('name', 'asc')->get();
        return view('posts.create-post')->with('catall', $category);
    }
    public function create(Request $req)
    {

        ///post insertion
        if ($req->title !== null && $req->category !== null && $req->description !== null) {
            Post::insert([
                // 'id' => $postCount->id,
                'title' => $req->title,
                'pbody' => $req->description,
                'fr_user_id' => $req->session()->get('id'),
                'fr_category_id' => $req->category,
                'status' => 1,
                'views' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]);
            $post = post::orderBy('id', 'desc')->first();
            $postCount = ($post->id);
            return redirect()->route('posts.view.single', [
                $req->category,
                $postCount
            ]);
        }
        else{
            $req->session()->flash('msg', 'Every field need to be fill');
            return redirect()->route('posts.create.view');
        }

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

        return view('posts.single')->with('post', $post)
            ->with('count', $count)
            ->with('comments', $comments);
    }

    public static function all()
    {
        $post = Post::with('category', 'comments', 'votes')->get();
        return $post;
    }
    public function edit($cat, $id)
    {

        $post = Post::with('category', 'user')->where('id', $id)->first();
        $category = category::orderBy('name', 'asc')->get();

        return view('posts.edit')->with('post', $post)
                                 ->with('catall', $category);


    }
    public function update(Request $req){
        Post::where('id', '=', $req->id)->update(array('title' => $req->title, 'pbody' => $req->description));
        // return view('home');
        return redirect()->route('home');
        // dd($req->id);
    }
    public function delete(Request $req){
        return redirect()->route('post.delete');
    }


}
