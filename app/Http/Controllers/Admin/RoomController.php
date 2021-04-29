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
         
          'id'=>$request->id,
          'name'=>$request->name,
          'room_number'=>$request->room_number,
          'price'=>$request-> room_price,
          'category_id'=>$request->category_id,
          'image'=>$filename
            
        ]);

        return redirect()->route('room.list');

    }

       public function DeleteRoom($id)
          {

             //dd($id);
              $room=Room::find($id);
              //dd($room);
              $room->delete();
          
              return redirect()->back()->with('success','Room deleted Successfully');
          }
          public function editRoom($id)
          { 
            $room=Room::find($id);
            $categories=Category::all();
           // dd($id);
            return view('backend.layouts.room.edit',compact('room','categories'));
          }


          public function updateRoom(Request $request,$id )
          {
             
            //dd($id);
            //dd($request->all());
            Room::find($id)->update([

             'id'=>$request->id,
             'name'=>$request->name,
             'room_number'=>$request->room_number,
             'price'=>$request->room_price,
             'category_id'=>$request->category_id,

             


            ]);

            return redirect()->route('room.list')->with('success','Updated Successfully');

          }

}
