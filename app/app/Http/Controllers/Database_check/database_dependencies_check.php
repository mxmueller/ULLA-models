<?php

namespace App\Http\Controllers\Database_check;

use App\Models\User;
use App\Models\Mobile;
use App\Models\Comment;
use App\Models\Request as Request_Alias;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class database_dependencies_check extends Controller
{
    public function check () {

        // ANCHOR Request use:
        // $test = Request_Alias::find(3);
        // $requst = $test->request_comment;
        // $rejected = $test->rejected_comment;
        // $granted = $test->granted_comment;
        // dd($test, $requst, $rejected, $granted);

        dd(Request_Alias::find(1)->rejected_comment);

    }
}
