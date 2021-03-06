<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use \Firebase\JWT\JWT;
class UserController extends Controller
{
    function getUser(){
        $token  = request()->header('Authorization');
        $key = "example_key";
        $decoded = JWT::decode($token, $key, array('HS256'));
        $userId = $decoded->user_id;
        $user = User::find($userId);
        $responseData = array("data"=>$user);
        return response()->json($responseData, 200);
    }
    function getName(){
        $token  = request()->header('Authorization');
        $key = "example_key";
        $decoded = JWT::decode($token, $key, array('HS256'));
        $userId = $decoded->user_id;
        $user = User::find($userId);
        $responseData = array("data"=>$user->name);
        return response()->json($responseData, 200);
    }
}
