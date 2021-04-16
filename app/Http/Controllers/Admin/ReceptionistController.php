<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receptionist;

class ReceptionistController extends Controller
{
    
   
    public function list()

    {   $title='Receptionist List';
        $receptionists=Receptionist::all();
        return view('backend.layouts.receptionist.list',compact('title','receptionists'));
    }

    public function createForm()
    {
        $title= "Create ReceptionistForm";
        return view('backend.layouts.receptionist.create', compact('title'));
    }


    public function store(Request $request)

    {

        Receptionist::create([
        
        'id'=>$request->id,
        'receptionist_name'=>$request->receptionist_name,
        'email'=>$request->email,
        'password'=>$request->password,
        'phone_number'=>$request->phone_number

       ]);

     return redirect()-> route('receptionist.list');
    }


}
