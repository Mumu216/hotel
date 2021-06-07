@extends('frontend.master')


@section('content')

<div class="container">
    <div class="main-body">

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('/uploads/user/'.auth()->user()->image) }}" alt="Admin"
                                class="rounded-circle" style="width: 150px; height:150px; line-height:150px">
                            <div class="mt-3">

                            </div>
                            {{-- @dd($user) --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ auth()->user()->name}}
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ auth()->user()->email}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ auth()->user()->phone_number}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ auth()->user()->address}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <h3>Your Booking List</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Room Name</th>
                    <th scope="col">From Date</th>
                    <th scope="col">to Date</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($booking as $data)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $data->room->name }}</td>
                    <td>{{ $data->booking_from }}</td>
                    <td>{{ $data->booking_to }}</td>
                    <td>{{ $data->rate }}</td>
                    <td>{{ $data->total }}</td>
                  </tr>
                @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
