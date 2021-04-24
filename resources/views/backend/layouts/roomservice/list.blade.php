@extends('backend.master')


@section('content')




<a class="btn btn-success" href="{{route('roomservice.createform')}}"> Create RoomserviceForm </a>

<table class="table">
    
    <thead>
    <tr>
       <th scope="col">#</th>
       <th scope="col">Id</th>
       <th scope="col">RoomService Name</th>
       <th scope="col">Status</th>
       <th scope="col">Quality</th>
       <th scope="col">Phone Number</th>



       </tr>
       </thead>


   <tbody>

   @foreach($roomservices as $key=> $data)
    <tr>
       <th scope="row">{{$key+1}}</th>
       <td>{{$data->id}}</td>
       <td>{{$data->name}}</td>
       <td>{{$data->status}}</td>
       <td>{{$data->quality}}</td>
       <td>{{$data->phone_number}}</td>


       </tr>
       @endforeach

       </tbody>
       </table>




@endsection