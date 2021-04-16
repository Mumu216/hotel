<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;


class PaymentController extends Controller
{
    public function list()
    {
        $title= "Payment List";
        $payments=Payment::all();
        return view('backend.layouts.payment.list', compact('title','payments'));
    }



    public function createForm()
    {
        $title= "Create Payment";
        return view('backend.layouts.payment.create', compact('title'));
    }


    public function store(Request $request)

    {

       Payment::create([
        
        'payment_id'=>$request->payment_id,
        'Booking_id'=>$request->Booking_id,
        'payment_amount'=>$request->payment_amount,
        'due'=>$request->due,
        'method'=>$request->method,

       ]);

     return redirect()-> route('payment.list');
    }
}
