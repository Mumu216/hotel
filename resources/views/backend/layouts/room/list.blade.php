@extends('backend.master')

@section('content')

<a class="btn btn-success" href="{{route('room.createform')}}"> Create New Room </a>


@if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

<table class="table table-bordered">
  <thead>
  <tr>

      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
      
      

  


    </tr>
      </thead>
      <tbody>
      @foreach($rooms as $key=>$data)
      <tr>
          <th scope="row">{{$key+1}}</th>
          <td>

              <img width=150px src="{{('/uploads/room/'.$data->image)}}" alt="">
          
          </td>
          <td>{{$data->id}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->room_number}}</td>
          <td>{{$data->price}}</td>
          <td>{{$data->roomCategory->category_name}}</td>
           <td>
           
               <a class="btn btn-success" href="{{route('room.edit',$data->id)}}">Edit</a>
               <a class="btn btn-danger" href="{{route('room.delete',$data->id)}}">Delete</a>

               </td>
    

      


          </tr>
          @endforeach
          </tbody>
    </table>

         
         
         
 @endsection
