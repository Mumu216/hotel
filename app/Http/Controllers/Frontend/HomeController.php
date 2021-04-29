<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Category;

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
}
