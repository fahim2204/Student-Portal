<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function viewall(){
        return view('posts.all');
    }
    //NOT IMPLEMENTED YET
    public function catwiseview($cat){
        return view('posts.catview')->with('category',$cat);
    }
    public function singleview($cat, $id){
        return view('posts.single')->with('category',$cat)
                                ->with('id',$id);
    }
    //NOT IMPLEMENTED YET
    public function edit($cat, $id){
        return view('posts.edit')->with('category',$cat)
                                ->with('id',$id);
    }
    public static function get($id)
    {
        return Post::where('id', $id)->first();
    }
    public function create(Request $req)
    {
        $post = new Post();
        $post->title = $req->input('post-title');
        $post->pbody = $req->input('post-description');
        $post->fr_category_id = (int)$req->input('post-category');
        $post->fr_user_id = 1;
        $imgName = time().'.'.$req->file('featured_image')->getClientOriginalExtension();
        $req->file('featured_image')->move(public_path('uploaded/images/posts'), $imgName);
        $post->image = $imgName;

        $post->save();
        
        return redirect()->route('admin.posts');
    }
    public function delete($id)
    {
        Post::where('id', $id)->first()->delete();
        return back();
    }
}
