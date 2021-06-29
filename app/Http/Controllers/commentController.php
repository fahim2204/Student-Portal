<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Notification;
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
        // Notification::insert([

        // ]);
        return redirect()->route('posts.view.single',[
            $req->catId, $req->postId
        ]);
    }
}
