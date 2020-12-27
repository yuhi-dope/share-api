<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function post(Request $request)
    {
        $now=Carbon::now();
        $param=[
            "share_id"=>$request->share_id,
            "user_id"=>$request->user_id,
            "content"=>$request->content,
            "created_at"=>$now,
            "updated_at"=>$now
        ];
        DB::table('comments')->insert($param);
        return response()->json([
            "message"=>"Comment created successfully",
            "data"=>$param
        ],200);
    }
}
