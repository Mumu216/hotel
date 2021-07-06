@extends('backend.master')

@section('content')


<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Create Booking
</button> --}}

<h1>New Booking</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Room Type</th>
            <th scope="col">User</th>
            <th scope="col">From Date</th>
            <th scope="col">To Date</th>
            <th scope="col">Rate</th>
            <th scope="col">Total</th>
            <th scope="col">Status</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($all_Booking as $key=> $data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{ $data->room->name }} </td>
            <td>{{$data->user->name}}</td>
            <td>{{date("Y-M-d",strtotime($data->booking_from))}} </td>
            <td>{{date("Y-M-d",strtotime($data->booking_to))}} </td>
            <td>{{$data->rate}}</td>
            <td>{{$data->total}}</td>
            <td>{{$data->status}}</td>
            <td>
                <a href="{{route('booking.confirm', $data->id)}}" class="btn btn-success">Confirm</a>
                <a href="{{route('booking.cancel', $data->id)}}" class="btn btn-danger">Cancel</a>
            </td>
        </tr>
        @endForeach
    </tbody>
</table>




<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Booking Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Select Room</label>
                        <select name="room_id" id="room_id" class="form-control">
                            <option value=""> Chose Room</option
                            @foreach ($room as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">From Date:</label>
                        <input required name="from_date" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">To Date:</label>
                        <input required name="to_date" type="date" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}


@endsection
