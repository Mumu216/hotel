<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class HomeController extends Controller
{
    public function website()
    {

        $all_room=Room::all();
        return view('frontend.layouts.home', compact('all_room'));
    }
}
