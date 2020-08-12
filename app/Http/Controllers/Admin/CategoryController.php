<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    function create(){
        $getAllCategory = Category::all();
        return view('admin.category.create',['category'=>$getAllCategory]);
    }
    function store(Request $request){
        $name = $request->input('name');
        $category = new Category();
        $category->name = $name;
        $category->save();
        return redirect('admin/category');
    }
    function destroy($id){
        Category::find($id)->delete();
        return redirect('admin/category');
    }
    function edit($id){
        $categories = Category::find($id);
        return view('admin.category.edit',['categories'=>$categories]);
    }
    function update(Request $request){
         $category = Category::find($request->input('id-category'));
         $category->name = $request->input('name');
         $category->save();
         return redirect('admin/category');
    }
}
