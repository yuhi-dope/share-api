<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function post(Request $requset)
    {
        $now=Carbon::now();
        $hashed_password=Hash::make($requset->password);
        $param=[
            "name"=>$requset->name,
            "email"=>$request->email,
            "password"=>$hashed_password,
            "profile"=>$request->profile,
            "created_at"=>$now,
            "updated_at"=>$now,
        ];
        DB::table('users')->insert($param);
        return reponse()->json([
            'message'=>'User created successfully',
            'data'=>$param
        ],200);
    }
}
