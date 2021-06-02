<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;

class FacilityController extends Controller
{
   
    
    public function list()

    {   $title='Facilities List';
        $facilities=Facility::all();
        return view('backend.layouts.facility.list',compact('title','facilities'));
    }


    public function createForm()
    {
        $title= "create New Facilities";
        return view('backend.layouts.facility.create',compact('title'));
    }


    public function store(Request $request)
    {
      
      Facility::create([

       'id'=>$request->id,
       'name'=>$request->name,
       'quality'=>$request->quality,
       'status'=>$request->status,

      ]);

      return redirect()->route('facility.list');
    }
}
