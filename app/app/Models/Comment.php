<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    // ANCHOR
    // Usage: Comment::find(x)->comment_x

    public function comment_request()
    {
        return $this->hasOne(Request::class, 'request_commentID', 'id');
    }

    public function comment_granted()
    {
        return $this->belongsTo(Comment::class, 'granted_commentID', 'id');
    }

    public function comment_rejected()
    {
        return $this->belongsTo(Comment::class, 'rejected_commentID', 'id');
    }
}
