<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Human_resource extends Model
{
    use HasFactory;

    // --------------------------------------------------------------------
    // ANCHOR Usage find human_resource->request
    // Usage: Human_resource::find(x)->request

    public function request()
    {
        return $this->belongsTo(Request::class, 'id', 'id');
    }
}
