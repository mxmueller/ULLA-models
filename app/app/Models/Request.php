<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    // --------------------------------------------------------------------
    // ANCHOR
    // Usage: Request::find(x)->comment_x

    public function request_comment()
    {
        return $this->belongsTo(Comment::class, 'request_comment_id', 'id');
    }

    public function granted_comment()
    {
        return $this->belongsTo(Comment::class, 'granted_comment_id', 'id');
    }

    public function rejected_comment()
    {
        return $this->belongsTo(Comment::class, 'rejected_comment_id', 'id');
    }

    // --------------------------------------------------------------------
    // ANCHOR
    // Usage: Request::find(x)->period

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id', 'id');
    }
}
