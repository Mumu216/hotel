<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Receptionist;
use App\Models\RoomService;
use App\Models\Facility;
use App\Models\User;
use App\Models\Category;
use App\Models\RoomType;

use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Boolean;

class HomeController extends Controller
{
    public function website()
    {
        $all_room=Room::all();
        $categories=Category::all();
        //dd($categories);

        return view('frontend.layouts.home', compact('all_room' ,'categories'));
    }

  //  public function website()
   // {
     //   return view('frontend.layouts.home', [
            //'all_room' => Room::all()
      //  ]);
   // }

   public function RoomSearch(Request $request)
   {

    $from_date = Carbon::parse($request->from_date);
    $to_date = Carbon::parse($request->to_date);
    if($from_date && $to_date)
    {
      $booking = Booking::select('room_id')->whereBetween('booking_from',[$from_date,$to_date])
                ->whereBetween('booking_to',[$from_date,$to_date])->get()->toArray();

      $rooms=Room::whereNotIn('id',$booking)->get();
      return view('frontend.layouts.room-under-category',compact('rooms'));

    }

   }


   public function profile()
   {

      $booking=Booking::where('user_id',auth()->user()->id)->with('bookingWithPayment')->get();
      //dd($booking);
      return view('frontend.layouts.profile', compact('booking'));


   }

   public function payment($id){
        $payment = Booking::where('id', $id)->firstOrFail();
        return view('frontend.layouts.payment', compact('payment'));
    }

   public function paymentPay(Request $request)
    {

        $request->validate([
            'payment_amount' => 'min:'
        ]);

       $booking = Booking::find($request->booking_id);
        if($booking->total >= $request->payment_amount){
            $booking->update([
                'due_amount' => $booking->total - $request->payment_amount
            ]);
        }
        // die();

       Payment::create([
        'id'=>$request->id,
        'booking_id'=>$request->booking_id,
        'room_id'=>$request->room_id,
        'payment_amount'=>$request->payment_amount,
        'payment_method'=>$request->payment_method,
        'transaction_id'=>$request->transaction_id,
        'status'=>'partial'
       ]);

     return back()->with('message', 'Successfully Payment');
    }

    public function receptionist(){

      return view('frontend.layouts.receptionist');
    }


    public function storeData(Request $request)

    {

        Receptionist::create([

        'id'=>$request->id,
        'receptionist_name'=>$request->receptionist_name,
        'email'=>$request->email,
        'password'=>$request->password,
        'phone_number'=>$request->phone_number

       ]);

     return back()-> with('message', 'form fillup Successfully');
    }



    public function facility()
    {

      return view('frontend.layouts.facility');
    }

    public function Info(Request $request)

    {

        Facility::create([

          'id'=>$request->id,
          'name'=>$request->name,
          'quality'=>$request->quality,
          'status'=>$request->status,

       ]);

     return back()->with('message' , 'Form fillup Successfully');
    }











}
