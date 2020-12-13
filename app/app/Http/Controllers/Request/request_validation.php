<?php

namespace App\Http\Controllers\Request;

use App\Models\Comment as CommentM;
use App\Models\Request as RequestM;
use App\Models\Period as PeriodM;
use App\Models\Human_resource as Human_resourceM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Request as Request_Alias;


class request_validation extends Controller
{
    public function request_validation_unit(Request $request) {
        $request_comment = $request->request_comment;
        $creator = $request->creator;
        $executive = $request->executive;
        $start = $request->start;
        $end = $request->end;

        $comment_model = new CommentM;
        $comment_model->comments_compressed_text = $request_comment;
        $comment_model->save();

        $request = new RequestM;
        $comment_model->comment_request()->save($request);

        $human_resources = new Human_resourceM;
        $human_resources->creator = $creator;
        $human_resources->executive = $executive;
        $request->human_resource()->save($human_resources);

        $period = new PeriodM;
        $period->start_tstmp = $start;
        $period->end_tstmp = $end;
        $request->period()->save($period);
    }
}
