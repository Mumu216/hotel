<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
//use Illuminate\Support\Facades\Auth;


class BookingController extends Controller
{
    public function BookRoom($id)
    {
       //dd($id);
       $room=Room::find($id);
       return view('frontend.layouts.book-room',compact('room'));
    }


    public function booking(Request $request)

    {  
        $room=Room::find($request->room_id);
        $dayscalculate=strtotime($request->to_date)-strtotime($request->from_date);
        $dayscalculate=round($dayscalculate / (60 * 60 * 24));
        //dd(round($dayscalculate/(60*60*24)));
 // need to check the room is available to book or not

     $fromDate=date("Y-m-d",strtotime($request->from_date));
     $toDate=date("Y-m-d",strtotime($request->to_date));

       $checkBook=Booking::where('room_id',$request->room_id)
                        ->whereDate('booking_from',$fromDate)
                        ->whereDate('booking_to',$toDate)
                        ->first();
    dd($checkBook);

                      





        
       //dd($request->all());
       Booking::create([

       'room_id'=>$request->room_id,
       'user_id'=>auth()->user()->id,
       'booking_from'=>$request->from_date,
       'booking_to'=>$request->to_date,
       'details'=>$request->details,
       'rate'=>$room->price,
       'total'=>$room->price*$dayscalculate,



       ]);

       return redirect()->back()->with('message','Booking created Successfully');

    }

    
}
