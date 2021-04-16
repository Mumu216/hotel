@extends('backend.master')


@section('content')
<a  class="btn btn-success" href="{{route('user.create')}}"> Create New User</a>


<table class="table">
<thead>
<tr>

    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Id</th>
    <th scope="col">Email</th>
    <th scope="col">Password</th>
    <th scope="col">Phone</th>

    </tr>
    </thead>



@endsection