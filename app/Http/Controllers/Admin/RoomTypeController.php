<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\Models\RoomType;

class RoomTypeController extends Controller
{
    public function list()

    {   $title='Room Type List';
        $roomtypes=RoomType::all();
        return view('backend.layouts.roomtype.list',compact('title','roomtypes'));
    }


    public function createForm()
    {
        $title='Create Room Type';
        return view('backend.layouts.roomtype.create',compact('title'));
    }


    public function store(Request $request)

    {

       RoomType::create([

        'id'=>$request->id,
        'roomtype_name'=>$request->roomtype_name,
        'status'=>$request->status,
        'description'=>$request->description,


       ]);

     return redirect()-> route('roomtype.list');
    }



    public function Deleteroomtype($id)
    {

       //dd($id);
        $roomtype=RoomType::find($id);
        //dd($room);
        $roomtype->delete();

        return redirect()->back()->with('success','Roomtype deleted Successfully');
    }

    public function editRoomtype($id)
    {
      $roomtypes=RoomType::find($id);

     // $categories=Category::all();
     // dd($id);
      return view('backend.layouts.roomtype.edit',compact('roomtypes'));
    }


    public function updateRoomtype(Request $request,$id )
    {

      //dd($id);
      //dd($request->all());
      RoomType::find($id)->update([


        'id'=>$request->id,
        'roomtype_name'=>$request->roomtype_name,
        'status'=>$request->status,
        'description'=>$request->description,


      ]);

      return redirect()->route('roomtype.list')->with('success','Updated Successfully');

    }


public function viewroomtype($id){

    // dd($id);
    // die();
    $roomtypes =RoomType::find($id);
     return view('backend.layouts.roomtype.view' ,compact('roomtypes'));

}

}
