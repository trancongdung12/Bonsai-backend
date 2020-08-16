<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    function product(){
        $products = Product::all();
        foreach($products as $product){
            $product->category;
        }
        return $products;
    }
    function category(){
        $category = Category::all();
        foreach($category as $item){
            $item->products;
        }
        return $category;
    }
    function newProduct(){
        $newproduct = Product::orderBy('id','DESC')->take(4)->get();
        foreach($newproduct as $item){
            $item->category;
        }
        return $newproduct;
    }
    function detail($id){
        $products = Product::find($id);
        return $products;
    }
}
