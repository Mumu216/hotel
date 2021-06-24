@extends('backend.master')

@section('content')



<form action="{{ route('roomtype.store')}}"  method="post">
  <div class="col-md-6">
    @csrf
      <div class-"form-group">
        <label for="id">Enter RoomType Id</label>
        <input id="id" type="number" name="id"  placeholder="Enter RoomType Id "  class="form-control">
       </div>


       <div class-"form-group">
        <label for="number">Enter RoomType Name </label>
        <input id="roomtype_name" type="text" name="roomtype_name"  placeholder="Enter RoomType Name "  class="form-control">
       </div>

       <div class-"form-group">
        <label for="status">Enter RoomType Status</label>
        <input id="status" type="text" name="status"  placeholder="Enter RoomType Status "  class="form-control">
       </div>


       <div class-"form-group">
        <label for="description">Enter RoomType description</label>
        <input id="description" type="text" name="description"  placeholder="Enter RoomType description "  class="form-control">
       </div>




       <button   type="submit"  class="btn btn-success">Create</button>





     </div>

</form>



@endsection
