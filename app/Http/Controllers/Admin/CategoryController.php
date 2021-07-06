<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Room;

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

       'category_name'=>$request->category_name,
       'category_number'=>$request->category_number,
       'status'=>$request->status,
       'description'=>$request->description,


      ]);

      return redirect()->route('category.list');
    }


    public function DeleteCategory($id)
    {

       //dd($id);
        $category=Category::find($id);
        //dd($room);
        $category->delete();

        return redirect()->back()->with('success','Category deleted Successfully');
    }

    public function editCategory($id)
    {
      $categories=Category::find($id);
      $room = Room::all();
     // $categories=Category::all();
     // dd($id);
      return view('backend.layouts.category.edit',compact('categories', 'room'));
    }


    public function updateCategory(Request $request,$id )
    {

      //dd($id);
      //dd($request->all());
      Category::find($id)->update([

       'category_name'=>$request->category_name,
       'category_number'=>$request->category_number,
       'status'=>$request->status,
       'description'=>$request->description
      ]);

      return redirect()->route('category.list')->with('success','Updated Successfully');

    }


public function viewCategory($id){

    $categories =Category::find($id);
     return view('backend.layouts.category.view' ,compact('categories'));


}



}
