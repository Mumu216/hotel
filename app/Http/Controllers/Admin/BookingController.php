<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{


    public function bookingNew()
    {

      $all_Booking = Booking::where('confirm' ,  'Pending')->with(['user','room'])->get();
       return view('backend.layouts.booking.new',compact('all_Booking'));
    }

    public function bookingAll()
    {
      // dd("ok");
      $all_Booking = Booking::where('confirm', 'Confirm')->with(['user','room'])->get();
        //dd($all_Booking);
       return view('backend.layouts.booking.all',compact('all_Booking'));
    }


    public function CheckIn($id)
    {
        $booking = Booking::find($id);

        $booking->update([
          'check_in'=>Carbon::now()
        ]);
        return redirect()->back();
    }

    public function CheckOut($id)

    {
      $booking = Booking::find($id);

      $booking->update([
        'check_out'=>Carbon::now()
      ]);
      return redirect()->back();

    }

    public function bookingConfirm($id)
    {
        $booking = Booking::find($id);

        $booking->update([

                        'confirm'=>'Confirm',
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





