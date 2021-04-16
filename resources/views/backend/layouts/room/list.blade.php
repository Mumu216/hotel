@extends('backend.master')

@section('content')

<a class="btn btn-success" href="{{route('room.createform')}}"> Create New Room </a>

<table class="table table-bordered">
  <thead>
  <tr>

      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
  


    </tr>
      </thead>
      <tbody>
      @foreach($rooms as $key=>$data)
      <tr>
          <th scope="row">{{$key+1}}</th>
          <td>

              <img width=150px src="{{('/uploads/room/'.$data->image)}}" alt="">
          
          </td>
          <td>{{$data->room_id}}</td>
          <td>{{$data->room_number}}</td>
          <td>{{$data->price}}</td>
          <td>{{$data->roomCategory->category_name}}</td>
    

      


          </tr>
          @endforeach
          </tbody>
    </table>

         
         
         
 @endsection
