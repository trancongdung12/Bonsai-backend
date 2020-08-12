<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
use App\Order;
class OrderController extends Controller
{
    function store(Request $request){
        $token  = request()->header('Authorization');
        $key = "example_key";
        $decoded = JWT::decode($token, $key, array('HS256'));
        $userId = $decoded->user_id;
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $address = $request->address;
        $cart = $request->cart;

        $Orders = new Order();
        $Orders->user_id = $userId;
        $Orders->name = $name;
        $Orders->phone = $phone;
        $Orders->email = $email;
        $Orders->address = $address;
        $Orders->cart = $cart;
        $Orders->save();
        $responseData = array("data"=>null);
        return response()->json($responseData, 200);
    }
    function getOrder(){
        $token  = request()->header('Authorization');
        $key = "example_key";
        $decoded = JWT::decode($token, $key, array('HS256'));
        $userId = $decoded->user_id;
        $Order = Order::where("user_id",$userId)->get();
        $responseData = array("data"=>$Order);
        return response()->json($responseData, 200);
    }
}
