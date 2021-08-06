<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Vote;
use App\Models\Notification;
use App\Models\Comment;
use Illuminate\Support\Carbon;
use Illuminate\Pagination\Paginator;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewall()
    {
        $post = Post::with('category', 'user')
            ->orderBy('id', 'desc')
            ->paginate(5);


        return view('posts.all')->with('posts', $post);
        // return redirect()->route('posts.view.all');
    }
    public function apiViewAll()
    {
        $post = Post::with('category', 'user', 'upvotes', 'downvotes')
            ->orderBy('id', 'desc')
            ->paginate(5);
        return response()->json($post);
        // return redirect()->route('posts.view.all');
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
        } else {
            $req->session()->flash('msg', 'Every field need to be fill');
            return redirect()->route('posts.create.view');
        }

        //return redirect(posts.view.single)
    }
    public function apiCatwiseView($cat)
    {
        $catid = Category::where('name', '=', $cat)->first()->id;
        $post = Post::with('category')->with('user')
            ->where('fr_category_id', $catid)
            ->orderBy('id', 'desc')
            ->get();
        $result = [
            'posts' => $post,
            'category' => $cat
        ];
        return $result;
    }
    // IMPLEMENTing
    public function catwiseview($cat)
    {
        $catid = Category::where('name', '=', $cat)->first()->id;
        $post = Post::with('category', 'user')
            ->where('fr_category_id', '=', $catid)
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('posts.catview')->with('category', $cat)
            ->with('posts', $post);
    }
    public function viewsearched($text)
    {
        $post = Post::with('category', 'user')
            ->where('title', 'like', '%' . $text . '%')
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('posts.all')->with('posts', $post);
    }
    public function apiViewSearched($text)
    {
        $post = Post::with('category', 'user')
            ->where('title', 'like', '%' . $text . '%')
            ->orderBy('id', 'desc')
            ->paginate(5);
        return $post;
    }
    public function singleview($cat, $id)
    {        

        $post = Post::with('category', 'user', 'upvotes', 'downvotes')->where('id', $id)->first();
        $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
        // //dd($pageWasRefreshed);
        if($pageWasRefreshed !== true) {
            Post::where('id',$id)->increment('views','1');
            $post->update();
        }
        
        $upcount = count($post->upvotes);
        $downcount = count($post->downvotes);
        //

        $post = Post::with('category', 'user')->where('id', $id)->first();

        if(session()->get('id')!==null){
            Notification::insert([
                'msg' => 'viewed your post',
                'fr_user_id' => session()->get('id'),
                'fr_notifier_user_id' => $post->fr_user_id,
                'created_at' => Carbon::now()
            ]);
        }
        $count = $upcount - $downcount;

        $comments = commentController::allComment($post->id);

        return view('posts.single')->with('post', $post)
            ->with('count', $count)
            ->with('comments', $comments);
    }
    public function apiSingleView($id)
    {      
        $post = Post::with('category', 'user', 'upvotes', 'downvotes')->where('id', $id)->first();
        $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
        // //dd($pageWasRefreshed);
        if($pageWasRefreshed !== true) {
            Post::where('id',$id)->increment('views','1');
            $post->update();
        }
        
        $upcount = count($post->upvotes);
        $downcount = count($post->downvotes);

        $post = Post::with('category', 'user')->where('id', $id)->first();

        // For creating notification
        if(session()->get('id')!==null){
            Notification::insert([
                'msg' => 'viewed your post',
                'fr_user_id' => session()->get('id'),
                'fr_notifier_user_id' => $post->fr_user_id,
                'created_at' => Carbon::now()
            ]);
        }
        $comments = commentController::allComment($post->id);
        
        $single_post = [
            'post' => $post,
            'upvote' => $upcount,
            'downvote' => $downcount,
            'comments' => $comments
        ];

        return $single_post;
    }

    public static function all()
    {
        $post = Post::with('category', 'comments', 'upvotes', 'downvotes')->orderBy('created_at', 'desc')->get();
        return $post;
        // return redirect()->route('posts.view.all');
    }
    public function edit($cat, $id)
    {

        $post = Post::with('category', 'user')->where('id', $id)->first();
        $category = category::orderBy('name', 'asc')->get();

        return view('posts.edit')->with('post', $post)
            ->with('catall', $category);
    }

    public function update(Request $req)
    {
        Post::where('id', '=', $req->id)->update(array('title' => $req->title, 'pbody' => $req->description));
        // return view('home');
        return redirect()->route('home');
        // dd($req->id);
    }
    public function apiUpdate(Request $req)
    {
        $post = Post::where('id', '=', $req->id)->first();
        if($post === null) return response()->json('Post not found');
        if($post->fr_user_id !== $req->user->id) return response()->json("You don't have permission to edit this post");

        $post->title = $req->input('title');
        $post->pbody = $req->input('description');
        $post->update();
        return response()->json($post, 200);   
    }
    // public function delete(Request $req)
    // {
    //     Post::where('id', $req->id)->delete();
    //     return redirect()->route('home');
    // }
    public static function get($id)
    {
        return Post::where('id', $id)->first();
    }
    public function adminCreate(Request $req)
    {
        $post = new Post();
        $post->title = $req->input('post-title');
        $post->pbody = $req->input('post-description');
        $post->fr_category_id = (int)$req->input('post-category');
        $post->fr_user_id = (int)$req->user->id;
        $imgName = time().'.'.$req->file('featured_image')->getClientOriginalExtension();
        $req->file('featured_image')->move(public_path('uploaded/images/posts'), $imgName);
        $post->image = $imgName;
        $post->save();

        return $post;
    }
    public function apiAdminCreate(Request $req)
    {
        $post = new Post();
        $post->title = $req->input('post-title');
        $post->pbody = $req->input('post-description');
        $post->fr_category_id = (int)$req->input('post-category');
        $post->fr_user_id = $req->user->id;
        $imgName = time().'.'.$req->file('featured_image')->getClientOriginalExtension();
        $req->file('featured_image')->move(public_path('uploaded/images/posts'), $imgName);
        $post->image = $imgName;
        $post->save();
        
        return response()->json($post, 201);
    }
    public function delete($id)
    {
        Post::where('id', $id)->first()->delete();
        return redirect()->route('home');
    }
    public function apiDelete(Request $req, $id)
    {
        $post = Post::where('id', $id)->first();
        if($req->user->id !== $post->fr_user_id) {
            return response()->json("You don't have permission to delete the post");
        } 
        $post->delete();
        return response()->json($post, 200);
    }
}
