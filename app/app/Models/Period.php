<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    // ----------------------------------------------------------------
    // ANCHOR
    // Usage: Period::find(x)->request
    public function request()
    {
        return $this->hasOne(Request::class, 'period_id', 'id');
    }
}
