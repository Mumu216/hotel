@extends('backend.master')



@section('content')



<!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Create Booking
</button>


<table class="table">
   
   <thead>
   <tr>
       
       <th scope="col">#</th>
       <th scope="col">Room</th>
       <th scope="col">User</th>
       <th scope="col">From Date</th>
       <th scope="col">To Date</th>
       <th scope="col">Rate</th>
       <th scope="col">Total</th>
       <th scope="col">Status</th>
       <th scope="col">Action</th>



       </tr>
       </thead>
       <tbody

  @foreach($all_Booking as $key=> $data)

       <tr>

       <td>{{$key+1}}</td>
       <td>{{$data->room->name}}</td>
       <td>{{$data->user->name}}</td>
       <td>{{date("Y-M-d",strtotime($data->booking_from))}} </td>
       <td>{{date("Y-M-d",strtotime($data->booking_to))}} </td>
       <td>{{$data->rate}}</td>
       <td>{{$data->total}}</td>
       <td>dghdjdjkd</td>
       <td> <a href="">View</a></td>






       
       
       </tr>

       @endForeach

          
          </tbody>
      </table>
      

       



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Booking Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      
        <form action="" method="post">
        @csrf
      </div>
      <div class="modal-body">


  <div class="form-group">
    <label for="">  Enter Booking number</label>
    <input name="booking_number"  type="number" class="form-control"  placeholder=" Enter Booking Number...">
  </div>

  <div class="form-group">
    <label for="">  Enter Booking id</label>
    <input name="booking_id"  type="number" class="form-control"  placeholder=" Enter Booking ID...">
  </div>

  <div class="form-group">
    <label for="">  Enter Admin id</label>
    <input name="admin_id"  type="number" class="form-control"  placeholder=" Enter Admin ID...">
  </div>

  <div class="form-group">
    <label for="">  Enter Booking Price</label>
    <input name="booking_price"  type="number" class="form-control"  placeholder=" Enter Booking Price...">
  </div>

  <div class="form-group">
    <label for=""> Status</label>
    <input name="status"  type="text" class="form-control"  placeholder=" Status...">
  </div>

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


@endsection