<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\User;
use App\Models\Category;
use Carbon\Carbon;

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


   public function profile(){
    return view('frontend.layouts.user-profile', [
      'user' => User::find(1)
    ]);
   }
}
