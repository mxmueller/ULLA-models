<?php

namespace App\Http\Controllers\Database_check;

use App\Models\User;
use App\Models\Mobile;
use App\Models\Comment;
use App\Models\Period;
use App\Models\Request as Request_Alias;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class database_dependencies_check extends Controller
{
    public function check () {

        // dd(Period::find(2)->request);

    }
}
