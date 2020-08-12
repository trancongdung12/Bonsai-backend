<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
class ProductController extends Controller
{
    function create(){
        $categories = Category::all();
        $products = Product::all();
        foreach($products as $product){
            $product->category;
        }
        return view("admin.product.create", ["category" => $categories,"product"=>$products]);
    }

    function store(Request $request){

        $image = $request->file("image")-> store("public");
        $name =$request->name;
        $category_id=$request->category;
        $price=$request->price;
        $description=$request->description;

        $product= new Product;
        $product->name= $name;
        $product->category_id= $category_id;
        $product->image= "/storage/".$image;
        $product->price= $price;
        $product->description= $description;
        $product->save();
        return redirect("admin/product");

        }

    function edit($id)
        {
            $categories= Category::all();
            $products= Product::find($id);
          return view("admin.product.edit", ["product"=> $products,"category" => $categories]);
        }

    function update(Request $request)
        {
            $id =$request->product_id;
            $product = Product::find($id);
            $name=$request->name;
            $category_id=$request->category;
            $price=$request->price;
            $description=$request->description;
            $image= $request->file("image");
            if($image == null){
                $image = $product->image;
                $product->image = $image;
            }else{
                $image = $request->file("image")->store("public");
                $product->image = '/storage/'.$image;
            }
            $product->name= $name;
            $product->category_id= $category_id;
            $product->price= $price;
            $product->description= $description;
            $product->save();


             return redirect("admin/product");

        }


    function destroy($id)
        {
            Product::find($id)->delete();
             return redirect("admin/product");
        }

}
