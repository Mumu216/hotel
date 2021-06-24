@extends('backend.master')
@section('header')
Facility List
@endsection


@section('content')





<a class="btn btn-success" href="{{route('facility.createform')}}"> Create New Facilities </a>

<table class="table table-bordered">
  <thead>
  <tr>

      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Quality</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>





    </tr>
      </thead>
      <tbody>
      @foreach($facilities as $key=>$data)
      <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->id}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->quality}}</td>
          <td>{{$data->status}}</td>


       <td>


         <a class="btn btn-success" href="{{route('facility.edit',$data->id)}}">Edit</a>
         <a class="btn btn-danger" href="{{route('facility.delete',$data->id)}}">Delete</a>

       </td>


          </tr>
          @endforeach
          </tbody>
    </table>



@endsection
