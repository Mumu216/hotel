<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list()
    {
        $title=' Room Category List';
        $category_list = Category::all();
        return view('backend.layouts.category.list',compact('title','category_list'));
    }

    public function createForm()
    {
        $title= "create New category";
        return view('backend.layouts.category.create',compact('title'));
    }


    public function store(Request $request)
    {
      
      Category::create([

       'id'=>$request->id,
       'category_name'=>$request->category_name,
       'status'=>$request->status,
       'description'=>$request->description,
       'image'=>$request->image,

      ]);

      return redirect()->route('category.list');
    }
}
