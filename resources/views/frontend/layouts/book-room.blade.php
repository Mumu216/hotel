@extends('frontend.master')


@section('content')






<div class="album py-5 bg-light">
 <div class="container">

    
          @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif



      <div class="row">

      <form action="{{route('room.booking')}}" method="post">
                @csrf
            <div class="form-group">
                <input type="hidden" value="{{$room->id}}" name="room_id">               
                  <div for="name">Enter Room Name: {{$room->name}}</div>
                  <div for="rate">Enter Room Rate: {{$room->price}}</div>
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
                    <label for="">Details:</label>
                    <textarea  name="details" id="" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
            </form>
        </div>
    </div>




</div>
@endsection