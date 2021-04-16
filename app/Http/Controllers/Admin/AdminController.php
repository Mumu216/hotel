<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;


class AdminController extends Controller
{
   public function dashboard(){
       $title = "Admin Dashboard";
       return view('backend.layouts.dashboard', compact('title'));
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

public function roomservice(){
    return view('backend.layouts.room service');
}




   





}
