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
        // dd($request->role);
        // die();

        $user_id = User::insertGetId([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'phone_number'=>$request->phone_number,
        'role'=>$request->role,
        'created_at' => Carbon::now()
       ]);


       Receptionist::create([
        'user_id' => $user_id,
        'receptionist_id' => Str::random(8)
    ]);

     return redirect()-> route('receptionist.list');
    }


}
