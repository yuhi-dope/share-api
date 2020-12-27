<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function post(Request $request)
    {
        $now=Carbon::now();
        $hashed_paasword=Hash::make($request->password);
        $param=[
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$hashed_password,
            "profile"=>$requuest->profile,
            "created_at"=>$now,
            "updated_at"=>$now,
        ];
        DB::table('users')->insert($param);
        return response()->json([
            'message'=>'User created sucessfully',
            'data'=>$param
        ],200);
    }
}
