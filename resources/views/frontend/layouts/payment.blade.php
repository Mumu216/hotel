@extends('frontend.master')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            @if(session()->has('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{ session()->get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <form action="{{ route('payment.pay')}}" method="post">
                @csrf
                <div class="form-group">
                    <div> <strong>Booking Id:</strong> <span class="">{{ $payment->id }}</span></div>
                    <div> <strong>Room Name:</strong> <span class="">{{ $payment->room->name }}</span></div>
                </div>
                <div class-"form-group">
                    <input id="booking_id" type="hidden" name="booking_id" value="{{ $payment->id }}">
                    <input id="room_id" type="hidden" name="room_name" value="{{ $payment->room->name }}">
                </div>

                <div class-"form-group">
                    <label for="payment_method">Enter Payment Method</label>
                    <input id="payment_method" type="text" name="payment_method" placeholder="Enter Payment Method"
                        class="form-control">
                </div>

                <div class-"form-group">
                    <label for="ampunt">Enter Payment Amount (Pay minimum : {{ $payment->total / 2 }} .TK )</label>
                    <input id="amount" type="number" min="{{ $payment->total / 2 }}" name="payment_amount" placeholder="Enter Payment Amount"
                        class="form-control">
                </div>

                <div class-"form-group">
                    <label for="transaction_id">Enter Payment TransactionID</label>
                    <input id="transaction_id" type="number" name="transaction_id"
                        placeholder="Enter Payment TransactionID" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form>
    </div>
</div>


@endsection
