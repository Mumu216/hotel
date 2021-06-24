@extends('backend.master')
@section('header')
All Payment
@endsection

@section('content')


<a class="btn btn-success" href="{{route('payment.createform')}}">  Create Payment</a>


  <table class="table">

    <thead>
    <tr>
       <th scope="col">#</th>
       <th scope="col">Booking Id</th>
       <th scope="col">Room Id</th>
       <th scope="col">Total</th>
       <th scope="col">Payment Amount</th>
       <th scope="col">Due</th>
       <th scope="col">Payment Method</th>
       <th scope="col">Transaction Id</th>
       <th scope="col">Action</th>


       </tr>
       </thead>


   <tbody>

   @foreach($payments as $key=> $data)

    <tr>
       <th scope="row">{{$key+1}}</th>
       <td>{{$data->id}}</td>
       <td>{{$data->paymentWithBooking->room->name}}</td>
       <td>{{optional($data->paymentWithBooking)->total}}</td>


       <td>{{$data->payment_amount}}</td>
       <td>

        {{ optional($data->paymentWithBooking)->total - $data->payment_amount }}

       </td>
       <td>{{$data->payment_method}}</td>
       <td>{{$data->transaction_id}}</td>

       <td>

         <a href="{{route('payConfirm', $data->id)}}" class="btn btn-success">Confirm</a>
         <a href="{{route('cancelApproved', $data->id)}}" class="btn btn-danger">Cancel</a>
       </td>




       </tr>
       @endforeach
       </tbody>

</table>


@endsection
