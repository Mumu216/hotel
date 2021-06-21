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


    public function DeleteFacility($id)
    {

       //dd($id);
        $facility=Facility::find($id);
        //dd($room);
        $facility->delete();
    
        return redirect()->back()->with('success','Facility deleted Successfully');
    }

    public function editFacility($id)
    { 
      $facilities=Facility::find($id);
      
     // $categories=Category::all();
     // dd($id);
      return view('backend.layouts.facility.edit',compact('facilities'));
    }


    public function updateFacility(Request $request,$id )
    {
       
      //dd($id);
      //dd($request->all());
      Facility::find($id)->update([
     
        'id'=>$request->id,
        'name'=>$request->name,
        'quality'=>$request->quality,
        'status'=>$request->status,
              
      ]);

      return redirect()->route('facility.list')->with('success','Updated Successfully');

    }
}
