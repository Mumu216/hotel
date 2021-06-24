@extends('frontend.master')


@section('content')









       <div class="container-fluid" style="margin-top:50px">
         <div class="row">
          @foreach($rooms as $data)
           <div class="col-md-3"  style="margin:10px 0px">
              <div class="accomodation_item text-center">
                <h4 class="sec_h4">{{$data->name}}</h4>
                <div class="hotel_img">
                    <img width="250px;" height="250px;" src="{{url('/uploads/room/'.$data->image)}}" alt="">
                  <!-- <a href="#" class="btn btn-success">Book Now</a>
                  <!-- <a href="#" class="btn btn-success">View</a>-->


                </div>
                <a href="#"><h4 class="sec_h4">{{$data->category_name}}</h4></a>
                <div class="btn-group">

                  <a href="{{route('room.show',$data->id)}}" class="btn btn-sm btn-primary">View</a>
                </div>
                <div class="p-2">
                    <span class="float-left">Price:</span>
                    <span class="float-right">{{$data->price}}Tk</span>
                </div>
              </div>
            </div>
            @endforeach


           </div>

         </div>

@endsection
