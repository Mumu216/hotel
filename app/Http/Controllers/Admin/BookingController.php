<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function bookinglist()
   {
       $bookings = Booking::all();
       $title='Booking list';
       return view('backend.layouts.booking.list', compact('bookings','title'));
   }

   
   public function create(Request $request)
   {

    Booking::create([

       'booking_id'=>$request->booking_id,
       'admin_id'=>$request->admin_id,
       'booking_price'=>$request->booking_price,
       'status'=>$request->status,


    ]);

    return redirect()->route('booking.bookinglist');
   }
     
    

   
}
