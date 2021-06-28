<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class commentController extends Controller
{
    public static function allComment($id){
        $comments = Comment::orderby('created_at', 'desc')
                            ->with('user','post')
                            ->where('fr_post_id','=',$id)
                            ->get();
        return $comments;
    }
    public function insertComment(Request $req){
        Comment::insert([
            'ctext' => $req->ctext,
            'fr_post_id' => $req->postId,
            'fr_user_id' => $req->session()->get('id'),
            'created_at' => Carbon::now()

        ]);
        $comments = Comment::with('user','post')
        ->where('fr_post_id','=',$req->postUserId)
        ->first();
        // $postId = Post::where('fr_post_id','=',$req->postId)->first();
        Notification::insert([
            'msg'=> 'commented on your post',
            'status' => 1,
            'fr_user_id' => $comments->fr_user_id,
            'fr_notifier_user_id' => $req->postUserId,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);
        return redirect()->route('posts.view.single',[
            $req->catId, $req->postId
        ]);
    }
}
