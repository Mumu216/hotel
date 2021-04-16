<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Category;



class RoomController extends Controller
{
    public function list()
    {
      
        $title='Room List';
        $rooms=Room::with('roomCategory')->get();
        return view('backend.layouts.room.list',compact('title','rooms'));
    }


    public function createForm()

    {
        $title='Create New Room';
        $categories=Category::all();
        //dd($categories);
        return view('backend.layouts.room.create',compact('title','categories'));
    }

    public function store(Request $request)

    {



       // dd($request->all());


       $filename = '';
       if($request->hasFile('image'))

       {
         // some code here to store into directory

         $file= $request->file('image');

         if ($file->isValid()){
           $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
          //  dd($filename());
         
            $file->storeAs('room',$filename);


         }


       }


        //store image into local directory




        //get a unique file name and store into database

        Room::create([
         
         'room_id'=>$request->room_id,
          'room_number'=>$request->room_number,
          'price'=>$request-> room_price,
          'category_id'=>$request->category_id,
          'image'=>$filename
            
        ]);

        return redirect()->route('room.list');
    }

}
