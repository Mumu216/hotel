@extends('backend.master')

@section('content')


<a class="btn btn-success" href="{{route('receptionist.createform')}}"> Create ReceptionistForm </a>

<table class="table">
    
    <thead>
    <tr>
       <th scope="col">#</th>
       <th scope="col">Id</th>
       <th scope="col">Receptionist Name</th>
       <th scope="col">Email</th>
       <th scope="col">Password</th>
       <th scope="col">Phone Number</th>



       </tr>
       </thead>


   <tbody>

   @foreach($receptionists as $key=> $data)
    <tr>
       <th scope="row">{{$key+1}}</th>
       <td>{{$data->id}}</td>
       <td>{{$data->receptionist_name}}</td>
       <td>{{$data->email}}</td>
       <td>{{$data->password}}</td>
       <td>{{$data->phone_number}}</td>


       </tr>
       @endforeach
       </tbody>

</table>


@endsection