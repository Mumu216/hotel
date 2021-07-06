@extends('frontend.master')

@section('content')


<div class="album py-5 bg-light mt-5">
    <div class="container">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <div class="row">
            <div class="col-lg-6 m-auto">
                <form action="{{route('room.booking')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div> <strong>Categoey Name:</strong> <span class="">{{ $room->roomCategory->category_name }}</span></div>
                        {{-- <div> <strong>Room Type:</strong> <span class="">{{ $room->roomRoomType->roomtype_name }}</span></div> --}}
                        <div> <strong>Facilites:</strong> <span class="">{{ $room->roomFacility->name }}</span></div>
                        <div> <strong>Room Number:</strong> <span class="">{{ $room->room_number }}</span></div>
                        <div> <strong>Room Price:</strong> <span class="">{{ $room->price }}</span></div>
                    </div>
                    <div>
                        <input type="hidden" name="room_id" value="{{ $room->id }}">
                        <input type="hidden" name="price" value="{{ $room->price }}">
                    </div>
                    <div class="form-group">
                        <label for="">From Date:</label>
                        <input required name="from_date" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">To Date:</label>
                        <input required name="to_date" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">status:</label>
                        <textarea name="status" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
