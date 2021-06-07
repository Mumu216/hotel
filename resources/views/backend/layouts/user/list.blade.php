@extends('backend.master')


@section('content')







<a class="btn btn-success" href="{{route('admin.users')}}"> User List</a>

<table class="table table-bordered">
  <thead>
  <tr>

      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      

    




    </tr>
      </thead>
      <tbody>
      @foreach($user_list as $key=>$data)
        <tr>
          <th scope="row">{{$key+1}}</th>
        
      <td>

          <img width=150px src="{{('/uploads/user/'.$data->image)}}" alt="">
      </td>
    
          <td>{{$data->id}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->role}}</td>
          <td>{{$data->address}}</td>
          <td>{{$data->phone_number}}</td>
      



          </tr>
          @endforeach
          </tbody>
    </table>



@endsection