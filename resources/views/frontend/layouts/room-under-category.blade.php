@extends('frontend.master')


@section('content')








       <div class="card">
        <div class="container-fliud">
          <div class="wrapper row">
            <div class="preview col-md-6">
 @foreach($rooms as $data)
 <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <h4 class="sec_h4">{{$data->category_name}}</h4>
                    <div class="hotel_img">
                        <img width="250px;" height="250px;" src="{{url('/uploads/room/'.$data->image)}}" alt="">
                       <!-- <a href="#" class="btn btn-success">Book Now</a>
                       <!-- <a href="#" class="btn btn-success">View</a>-->


                    </div>
                    <a href="#">
                        <h4 class="sec_h4">{{$data->category_name}}</h4>
                        <div class="btn-group">
                        <button onclick="cart()" type="button" class="btn btn-sm btn-primary">Add to Cart</button>
                         <a href="{{route('room.show',$data->id)}}" class="btn btn-sm btn-warning">View</a>
                        </div>
                </a>
                    <h6 class="p-2">
                        <span class="float-left">Price:</span>
                        <span class="float-right">{{$data->price}}.Tk</span>
                    </h6>
                </div>
            </div>  

              @endforeach        
            
            </div>
          
          
          </div>
        
        
        </div>


       </div>

@endsection