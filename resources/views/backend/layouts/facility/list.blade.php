@extends('backend.master')



@section('content')





<a class="btn btn-success" href="{{route('facility.createform')}}"> Create New Facilities </a>

<table class="table table-bordered">
  <thead>
  <tr>

      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Text</th>
      <th scope="col">Status</th>




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


          </tr>
          @endforeach
          </tbody>
    </table>



@endsection