<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Category;
use App\Models\RoomType;
use App\Models\Facility;



use function GuzzleHttp\Promise\all;

class RoomController extends Controller
{
    public function list()
    {

        $title='Room List';
        $rooms=Room::with('roomCategory')->paginate(5);
        return view('backend.layouts.room.list',compact('title','rooms'));
    }


    public function search(Request $request)
    {
      $search=$request->search;
      if($search)
      {
        $rooms=Room::where('name','like','%'.$search.'%')
                  ->orwhere('price','like', '%'.$search.'%')->get();

    } else{

      $rooms=Room::with('roomCategory')->get();

         }

           $title="Search result";
           return view('backend.layouts.room.list',compact('title','rooms','search'));

   }




    public function createForm()

    {
        $title='Create New Room';
        $categories=Category::all();
        $roomtypes=RoomType::all();
        $facilities=Facility::all();

        //dd($categories);
        return view('backend.layouts.room.create',compact('title','categories','roomtypes','facilities'));
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



        Room::create([

          'id'=>$request->id,
          'room_number'=>$request->room_number,
          'price'=>$request-> room_price,
          'category_id'=>$request->category_id,
          'roomtype_id'=>$request->roomtype_id,
          'facility_id'=>$request->facility_id,

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


        public function updateRoom(Request $request,$id ){
            // dd($request->all());
            // die();
            $room = Room::find($id);
            $filename = '';
            if($request->hasFile('image')) {
                $file= $request->file('image');
                if ($file->isValid()){
                $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('room',$filename);

                if(file_exists(public_path('uploads/room/'.$room->image))){
                    unlink(public_path('uploads/room/'.$room->image));
                }
                }
            }

            $room->update([
             'id'=>$request->id,
             'name'=>$request->name,
             'room_number'=>$request->room_number,
             'price'=>$request->price,
             'category_id'=>$request->category_id,
             'image' => $filename
            ]);

            return redirect()->route('room.list')->with('success','Updated Successfully');

          }

          public function ShowRoom($id)
          {
              //dd($id);
              $room=Room::with('roomCategory')->find($id);
              //dd($room);
              return view('backend.layouts.room.single-room',compact('room'));
          }

}
