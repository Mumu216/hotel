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

        'id'=>$request->id,
        'booking_id'=>$request->booking_id,
        'payment_amount'=>$request->payment_amount,
        'payment_method'=>$request->payment_method,
        'transaction_id'=>$request->transaction_id

       ]);

     return redirect()-> route('payment.list');
    }

    public function payConfirm($id)
    {
        $payment = Payment::find($id);

        $payment->update([

                        'status'=>'Confirm',
        ]);

        return redirect()-> back();

    }

    public function cancelApproved($id)
    {
        $payment = Payment::find($id);

        $payment->update([

                        'cancel'=>'Cancel Approved',
        ]);

        return redirect()-> back();


}

}
