<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    // --------------------------------------------------------------------
    // ANCHOR Usage find request->comment
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
    // ANCHOR Usage find request->period
    // Usage: Request::find(x)->period

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id', 'id');
    }

    // ----------------------------------------------------------------
    // ANCHOR Usage find request->human_resource
    // Usage: Request::find(x)->human_resource

    public function human_resource()
    {
        return $this->hasOne(Human_resource::class, 'id', 'id');
    }
}
