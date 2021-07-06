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
       <th scope="col">Action</th>
     </tr>
       </thead>
    <tbody>
        {{-- {{ $roomtypes->relationRoomtypeWithRoom }} --}}

   @foreach($roomtypes as $key=> $data)
    <tr>
       <th scope="row">{{$key+1}}</th>
       <td>{{ $data->id }}</td>
       <td>{{ $data->roomtype_name }}</td>
       <td>{{ $data->status }}</td>
       <td>{{ $data->description }}</td>
      <td>
         <a class="btn btn-danger" href="{{route('roomtype.edit',$data->id)}}">Edit</a>
        <a class="btn btn-primary" href="{{route('roomtype.delete',$data->id)}}">Delete</a>
       </td>

       </tr>
       @endforeach
       </tbody>

</table>



@endsection
