<?php

namespace App;

class Post extends Model
{

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
        // Comment::create([
        //     'body' => request('body'),
        //     'post_id' => $this->id
        // ]);
    }
    public function user() // $post->user->name // to select the user 
    {
        return $this->belongsTo(User::class);
    }
}
