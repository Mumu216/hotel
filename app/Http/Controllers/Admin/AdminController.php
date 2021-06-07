<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Models\Room;
use App\Models\Booking;
use App\Models\User;
use App\Models\Category;
use App\Models\Payment;






class AdminController extends Controller
{
   public function dashboard(){
       //dd("ök");
       $title = "Admin Dashboard";
       $room=Room::all()->count();
       $booking=Booking::all()->count();
       $user=User::all()->count();
       $category=Category::all()->count();
       $payment=Payment::all()->count();
       
       
       return view('backend.layouts.dashboard', compact('title','room','booking','user','category','payment'));
   }

   
   public function admin(){
    $title = "Admin Panel";
    return view('backend.layouts.admin', compact('title'));
}

 

public function payment(){
    return view('backend.layouts.payment');
}



public function rooms(){
    return view('backend.layouts.rooms');
}



public function receptionist(){
    return view('backend.layouts.receptionist');
}

public function facilities(){
    return view('backend.layouts.facilities');
}


   





}
