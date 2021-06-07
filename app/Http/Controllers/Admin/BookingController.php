<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
   // public function bookinglist()
   //{
    //   $bookings = Booking::all();
     //  $title='Booking list';
      // return view('backend.layouts.booking.list', compact('bookings','title'));
  // }

   
   //public function create(Request $request)
  // {

    //Booking::create([

      // 'booking_id'=>$request->booking_id,
       //'admin_id'=>$request->admin_id,
       //'booking_price'=>$request->booking_price,
       //'status'=>$request->status,


    //]);

   // return redirect()->route('booking.bookinglist');
   //

    public function ShowBooking()
    { 
      // dd("ok");
      $all_Booking=Booking::with(['user','room'])->get();
        //dd($all_Booking);
       return view('backend.layouts.booking.list',compact('all_Booking'));
    }


    public function CheckIn($id)
    {
        $booking = Booking::find($id);

        $booking->update([
          'check_in'=>now()
        ]);
        return redirect()->back();
    }

    public function CheckOut($id)

    { 
      $booking = Booking::find($id);

      $booking->update([
        'check_out'=>now()
      ]);
      return redirect()->back();

    }

    public function bookingConfirm($id)
    {
        $booking = Booking::find($id);

        $booking->update([

                        'confirm'=>' Booking Confirm',
        ]);

        return redirect()-> back();

    }

    public function bookingCancel($id)
    {
        $booking = Booking::find($id);

        $booking->update([

                        'cancel'=>'Booking Cancel Approved',
        ]);

        return redirect()-> back();


}

}
     
    

   

