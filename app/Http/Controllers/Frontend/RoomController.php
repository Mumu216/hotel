<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function ShowRoom($id)
    {
        //dd($id);
        $room=Room::find($id);
        //dd($room);
        return view('frontend.layouts.single-room');
    }


    public function RoomsUnderCategory($cid)
    {   

       // dd($cid);
       //get all rooms from room table where category id= $cid
       if($cid=='all')
       {
          $rooms=Room::all();
       }
        else
       {
       $rooms=Room::where('category_id',$cid)->get();
       }
        //dd($rooms);
       return view('frontend.layouts.room-under-category',compact('rooms'));
    }

    
}
