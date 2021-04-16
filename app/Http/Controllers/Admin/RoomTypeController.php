<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\Models\RoomType;

class RoomTypeController extends Controller
{
    public function list()

    {   $title='Room Type List';
        $roomtypes=RoomType::all();
        return view('backend.layouts.roomtype.list',compact('title','roomtypes'));
    }


    public function createForm()
    {
        $title='Create Room Type';
        return view('backend.layouts.roomtype.create',compact('title'));
    }

    
    public function store(Request $request)

    {

       RoomType::create([
        
        'id'=>$request->id,
        'roomtype_name'=>$request->roomtype_name,
        'status'=>$request->status,
        'description'=>$request->description,
    

       ]);

     return redirect()-> route('roomtype.list');
    }
}
