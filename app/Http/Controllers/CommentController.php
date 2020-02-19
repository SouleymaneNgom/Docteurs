<?php

namespace App\Http\Controllers;
use App\Topic ; 
use App\Comment;
<<<<<<< HEAD
use App\Notifications\NewCommentPosted;
=======
>>>>>>> 85f90c5a62e12697e7db9f4ce3927e1567510187
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
<<<<<<< HEAD

        //Notification
        $topic->user->notify(new NewCommentPosted($topic, auth()->user()));


        return redirect()->route('topics.show',$topic);
=======
        return redirect()->route('topics.show', $topic);
>>>>>>> 85f90c5a62e12697e7db9f4ce3927e1567510187
 
    }

    public function storeCommentReply(Comment $comment){
        
        request()->validate([
            'replyComment'=>'required|min:3'

        ]);
<<<<<<< HEAD
=======

        $commentReply = new Comment();
        $commentReply->content=request('replyComment');
        $commentReply->user_id=auth()->user()->id ; 
        $comment->comments()->save($commentReply);

        return redirect()->back();
        //return redirect()->route('topics.show', $topic);
>>>>>>> 85f90c5a62e12697e7db9f4ce3927e1567510187
    }
}
