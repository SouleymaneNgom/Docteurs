<?php

namespace App\Http\Controllers;
use App\Topic ; 
use App\Comment;
use App\Notifications\NewCommentPosted;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function store(Topic $topic){


        request()->validate([
            'content' => 'required|min:5'

        ]);
        $comment= new Comment();
        $comment->content=request('content');
        $comment->user_id=auth()->user()->id ;
        $topic->comments()->save($comment);

        //Notification
        $topic->user->notify(new NewCommentPosted($topic, auth()->user()));


        return redirect()->route('topics.show',$topic);
 
    }

    public function storeCommentReply(Comment $comment){
        
        request()->validate([
            'replyComment'=>'required|min:3'

        ]);
    }
}
