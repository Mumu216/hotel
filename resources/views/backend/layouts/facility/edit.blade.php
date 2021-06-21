@extends('backend.master')


@section('content')


<form action="{{ route('facility.update',$facilities->id)}}"   method="post">
  <div class="col-md-6">
    @csrf
    @method('PUT')

    <div class-"form-group">
        <label for="id">Enter Facilities Id </label>
        <input id="id" type="number" name="id" value="{{$facilities->id}}"  placeholder="Enter Facilities Id"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="name">Enter Facilities Name</label>
        <input id="name" type="text" name="name" value="{{$facilities->name}}" placeholder="Enter Facilities Name"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="quality">Enter Facilities Quality</label>
        <input id="quality" type="text" name="quality" value="{{$facilities->quality}}" placeholder="Enter Facilities Quality"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="status">Enter Facilities Status </label>
        <input id="status" type="text" name="status" value="{{$facilities->status}}" placeholder="Enter Facilities Status "  class="form-control">
       </div>


       
      <button   type="submit"  class="btn btn-success">Create</button>

 </div>

</form>



@endsection

