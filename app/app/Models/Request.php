<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    // ANCHOR
    // Usage: Request::find(x)->comment_x

    public function request_comment()
    {
        return $this->belongsTo(Comment::class, 'request_commentID', 'id');
    }

    public function granted_comment()
    {
        return $this->belongsTo(Comment::class, 'granted_commentID', 'id');
    }

    public function rejected_comment()
    {
        return $this->belongsTo(Comment::class, 'rejected_commentID', 'id');
    }
}
