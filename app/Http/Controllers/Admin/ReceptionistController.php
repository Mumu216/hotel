<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receptionist;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ReceptionistController extends Controller
{


    public function list(){
        $title='Receptionist List';
        $receptionists = Receptionist::all();
        $receptionist_list = User::where('role', 'receptionist')->get();
        return view('backend.layouts.receptionist.list',compact('title','receptionists', 'receptionist_list'));
    }

    public function createForm()
    {
        $title= "Create ReceptionistForm";
        return view('backend.layouts.receptionist.create', compact('title'));
    }


    public function store(Request $request){
        $filename = '';
        if($request->hasFile('image')) {
            $file= $request->file('image');
            if ($file->isValid()){
            $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('user', $filename);
            }
        }

        $user_id = User::insertGetId([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'phone_number' => $request->phone_number,
            'role'=> $request->role,
            'image' => $filename,
            'address' => $request->address,
            'created_at' => Carbon::now()
       ]);


       Receptionist::create([
        'user_id' => $user_id,
        'receptionist_id' => rand(100000, 999999)
    ]);

     return redirect()-> route('receptionist.list');
    }


}
