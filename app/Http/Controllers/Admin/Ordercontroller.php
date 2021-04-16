<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class Ordercontroller extends Controller
{
    public function orderlist(){
        $title= "Order List";
        $orders = Order::all();
        return view('backend.layouts.order', compact('title','orders'));
    }
    
    public function create(Request $request)
{

   
    // $request->all());

    //insert into orders table
    
      Order::create([

        'name'=>$request->name,
        'email'=>$request->email,
        'address'=>$request->address,
        'password'=>$request->password,
        'contact'=>$request->contact,
         
     ]);

     return redirect() ->back();

    


}
}
