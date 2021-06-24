<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\BookingNotification;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class BookingController extends Controller
{
    public function BookRoom($id)
    {
       //dd($id);
       $room =Room::find($id);
       return view('frontend.layouts.book-room',compact('room'));
    }


    public function booking(Request $request)
    {
        $room=Room::find($request->room_id);
        $dayscalculate=strtotime($request->to_date)-strtotime($request->from_date);
        $dayscalculate=round($dayscalculate / (60 * 60 * 24));
        //dd(round($dayscalculate/(60*60*24)));
    // need to check the room is available to book or not

        $fromDate=Carbon::parse(date("Y-m-d",strtotime($request->from_date)));
        $toDate=Carbon::parse(date("Y-m-d",strtotime($request->to_date)));
        //  $expaired_days = date_diff($fromDate,$toDate);

        //  $expaired_date =Carbon::parse(date("Y-m-d",strtotime($expaired_days)));
        //  dd( $expaired_date);

        $checkBook = Booking::where('room_id',$request->room_id)
                            ->whereBetween('booking_from',[$fromDate,$toDate])
                            ->orwhereBetween('booking_to',[$fromDate,$toDate])->get();

        if($checkBook->count()==0){
            //dd($request->all());
            $booking= Booking::create([
                'room_id'=>$request->room_id,
                'user_id'=>auth()->user()->id,
                'booking_from'=>$request->from_date,
                'booking_to'=>$request->to_date,
                'check_in'=>$request->check_in,
                'check_out'=>$request->check_out,
                'status'=>$request->status,
                'rate'=>$request->price,
                'total'=>$request->price*$dayscalculate,
            ]);

            // send mail to user
            Mail::to(Auth::user()->email)->send( new BookingNotification($booking));
            return redirect()->back()->with('message','Booking Created Successfully');
        } else{
            return redirect()->back()->with('message','Already booked');
        }
    }
}
