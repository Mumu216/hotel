@extends('backend.master')


@section('content')





<form action="{{ route('roomservice.store')}}"  method="post">
  <div class="col-md-6">
    @csrf
      <div class-"form-group">
        <label for="id">Enter RoomService Id</label>
        <input id="id" type="number" name="id"  placeholder="Enter RoomService Id"  class="form-control">
       </div>


       <div class-"form-group">
        <label for="name">Enter Roomservice Name </label>
        <input id="name" type="text" name="name"  placeholder="Enter Roomservice Name "  class="form-control">
       </div>

       <div class-"form-group">
        <label for="status">Enter RoomService Status</label>
        <input id="status" type="text" name="status"  placeholder="Enter RoomService Status"  class="form-control">
       </div>


       <div class-"form-group">
        <label for="quality">Enter RoomService Quality</label>
        <input id="quality" type="text" name="quality"  placeholder="Enter RoomService Quality"  class="form-control">
       </div>

       
       <div class-"form-group">
        <label for="phone_number">Enter RoomService PhoneNumber</label>
        <input id="phone_numbe" type="number" name="phone_number"  placeholder="Enter RoomService PhoneNumber"  class="form-control">
       </div>



       <button   type="submit"  class="btn btn-success">Create</button>





     </div>

</form>

@endsection