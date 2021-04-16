@extends('backend.master')


@section('content')



<a class="btn btn-success" href="{{route('roomtype.createform')}}"> Create Room Type </a>

<table class="table">
    
    <thead>
    <tr>
       <th scope="col">#</th>
       <th scope="col">Id</th>
       <th scope="col">RoomType Name</th>
       <th scope="col">Status</th>
       <th scope="col">Description</th>


       </tr>
       </thead>


   <tbody>

   @foreach($roomtypes as $key=> $data)
    <tr>
       <th scope="row">{{$key+1}}</th>
       <td>{{$data->id}}</td>
       <td>{{$data->roomtype_name}}</td>
       <td>{{$data->status}}</td>
       <td>{{$data->description}}</td>

       </tr>
       @endforeach
       </tbody>

</table>



@endsection