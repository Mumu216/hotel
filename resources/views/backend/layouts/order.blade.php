@extends('backend.master')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary b-block" data-toggle="modal" data-target="#exampleModal">
  Create Order
</button>




<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Contact</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
      
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
      <a href="#">View</a>
      <a href="#">Edit</a>
      <a href="#">Delete</a>
      </td>
      
    </tr>
    </thead>
</tbody>


  @foreach($orders as $data)

  <tr>

      <th scope='row'> {{$data->sl}}</th>
      <td> {{$data->name}}</td>
      <td> {{$data->address}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->password}}</td>
      <td> {{$data->contact}}</td>

      <td>

        <a class="btn btn-success"  href="">View</a>
        <a class="btn btn-primary"  href="">Edit</a>
        <a class="btn btn-danger"  href="">Delete</a>

        </td>
         </tr>
         @endforeach

         </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>


        <form action="{{route('order.create')}}" method="post">
        @csrf

      </div>
      <div class="modal-body">
      <form>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address"  placeholder="Enter Address">

  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" name="email"   placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact"  placeholder="Enter Contact Number">
  </div>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

      </form>
    </div>
  </div>
</div


@endsection
