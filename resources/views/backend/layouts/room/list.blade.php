@extends('backend.master')

@section('content')

<a class="btn btn-success" href="{{route('room.createform')}}"> Create New Room </a>


@if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif


      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>



          <div class="col-md-4">
          <form action="{{route('room.search')}}" method="POST">
               @csrf
             <input name="search" type="text"  placeholder="search" class="form-control">
             <button type="submit" class"btn btn-primary">Search</button>
          
          
             </form>
          
          </div>
       </div>

    @if(isset($search))
         <p>
          <span class="alert alert-success"> you are searching for  '{{$search}}' , found ({{count($rooms)}})  </span>
         
         </p>

    @endif

<table class="table table-bordered">
  <thead>
  <tr>

      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">ID</th>
      <th scope="col">Number</th>
      <th scope="col">Price</th>
      <th scope="col">RoomType Name</th>
      <th scope="col">Category</th>
      <th scope="col">Facility</th>
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
          <td>{{$data->room_number}}</td>
          <td>{{$data->price}}</td>
          <td>{{$data->roomRoomType->roomtype_name}}</td>
          <td>{{$data->roomCategory->category_name}}</td>
          <td>{{$data->roomFacility->name}}</td>
          
    


           <td>

              <a href="{{route('room.shows',$data->id)}}" class="btn btn-sm btn-warning">View</a>
               
               <a class="btn btn-success" href="{{route('room.edit',$data->id)}}">Edit</a>
               <a class="btn btn-danger" href="{{route('room.delete',$data->id)}}">Delete</a>

               </td>
    

      


          </tr>
          @endforeach
          </tbody>
    </table>

  {{-- {{ $rooms->links() }} --}}
         
         
 @endsection
