<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//auth
Route::post('auth/register','API\AuthController@register');
Route::post('auth/login','API\AuthController@login');

//Order
Route::post('/order','API\OrderController@store');
Route::get('/order','API\OrderController@getOrder');

//USER
Route::get('user/name','API\UserController@getName');
Route::get('user/profile','API\UserController@getUser');

//PRODUCT
Route::get('/product','API\ProductController@product');
Route::get('/category','API\ProductController@category');
Route::get('/newproduct','API\ProductController@newProduct');
Route::get('/product/{id}','API\ProductController@detail');
