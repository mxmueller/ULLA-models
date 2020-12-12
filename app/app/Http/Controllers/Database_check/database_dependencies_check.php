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

        $test = Request_Alias::find(2);
        $test_comment = $test->comment;

        dd($test, $test_comment);

        
        // $comment = new Comment;
        // $comment->comments_compressed_text = "Test Name";
        // $comment->save();

        // $request = new Request_Alias;
        // $comment->request()->save($request);
    }
}
