@extends('backend.master')


@section('content')


<form action="{{ route('payment.store')}}"  method="post">
  <div class="col-md-6">
    @csrf
      <div class-"form-group">
        <label for="id">Enter Payment Id</label>
        <input id="id" type="number" name="id"  placeholder="Enter Payment Id"  class="form-control">
       </div>


       <div class-"form-group">
        <label for="booking_id">Enter Booking Id</label>
        <input id="booking_id" type="number" name="booking_id"  placeholder="Enter Booking Id"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="ampunt">Enter Payment Amount</label>
        <input id="amount" type="number" name="payment_amount"  placeholder="Enter Payment Amount"  class="form-control">
       </div>


       <div class-"form-group">
        <label for="due">Enter Due</label>
        <input id="due" type="number" name="due"  placeholder="Enter Due"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="payment_method">Enter Payment Method</label>
        <input id="payment_method" type="text" name="payment_method"  placeholder="Enter Payment Method"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="transaction_id">Enter Payment TransactionID</label>
        <input id="transaction_id" type="number" name="transaction_id"  placeholder="Enter Payment TransactionID"  class="form-control">
       </div>



       <button   type="submit"  class="btn btn-success">Create</button>





     </div>

</form>





@endsection