@extends('backend.master')


@section('content')


<a class="btn btn-success" href="{{route('payment.createform')}}">  Create Payment</a>


  <table class="table">
    
    <thead>
    <tr>
       <th scope="col">#</th>
       <th scope="col">Id</th>
       <th scope="col">Booking Id</th>
       <th scope="col">Payment Amount</th>
       <th scope="col">Due</th>
       <th scope="col">Method</th>
       <th scope="col">Transaction Id</th>


       </tr>
       </thead>


   <tbody>

   @foreach($payments as $key=> $data)
    <tr>
       <th scope="row">{{$key+1}}</th>
       <td>{{$data->id}}</td>
       <td>{{$data->booking_id}}</td>
       <td>{{$data->payment_amount}}</td>
       <td>{{$data->due}}</td>
       <td>{{$data->payment_method}}</td>
       <td>{{$data->transaction_id}}</td>


       </tr>
       @endforeach
       </tbody>

</table>


@endsection