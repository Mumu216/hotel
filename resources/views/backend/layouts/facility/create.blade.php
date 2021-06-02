@extends('backend.master')




@section('content')




<form action="{{ route('facility.store')}}"  method="post">
    <div class="col-md-6">
      @csrf
       
  
  
         <div class-"form-group">
          <label for="id">Enter Facilities Id </label>
          <input id="id" type="number" name="id"  placeholder="Enter Facilities Id"  class="form-control">
         </div>
  
         <div class-"form-group">
          <label for="name">Enter Facilities Name</label>
          <input id="name" type="text" name="name"  placeholder="Enter Facilities Name"  class="form-control">
         </div>
  
         <div class-"form-group">
          <label for="quality">Enter Facilities Quality</label>
          <input id="quality" type="text" name="quality"  placeholder="Enter Facilities Quality"  class="form-control">
         </div>
  
         <div class-"form-group">
          <label for="status">Enter Facilities Status </label>
          <input id="status" type="text" name="status"  placeholder="Enter Facilities Status "  class="form-control">
         </div>
  
  
         
        <button   type="submit"  class="btn btn-success">Create</button>
  
   </div>
  
  </form>



@endsection