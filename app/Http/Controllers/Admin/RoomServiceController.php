<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomService;

class RoomServiceController extends Controller
{
    
    public function list()

    {   $title='Roomservice List';
        $roomservices=RoomService::all();
        return view('backend.layouts.roomservice.list',compact('title','roomservices'));
    }

    public function createForm()
    {
        $title= "Create RoomServicetForm";
        return view('backend.layouts.roomservice.create', compact('title'));
    }


    public function store(Request $request)

    {

        RoomService::create([
        
        'id'=>$request->id,
        'name'=>$request->name,
        'status'=>$request->status,
        'quality'=>$request->quality,
        'phone_number'=>$request->phone_number

       ]);

     return redirect()->route('roomservice.list');
    }


  

    
   
}
