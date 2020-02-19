<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded=[];
    
    public function commentable(){

        return $this->morphTo();
    }

    public function comments(){

<<<<<<< HEAD
        return $this->morphMany('App\Comments', 'commentables')->latest();
=======
        return $this->morphMany('App\Comment', 'commentable')->latest();
>>>>>>> 85f90c5a62e12697e7db9f4ce3927e1567510187
    }


    public function user(){

        return $this->belongsTo('App\User');
    }
}
