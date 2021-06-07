@extends('backend.master')


@section('content')


<form action="{{ route('category.store')}}"  method="post">
  <div class="col-md-6">
    @csrf
     


       <div class-"form-group">
        <label for="number">Enter Category Name</label>
        <input id="name" type="text" name="category_name"  placeholder="Enter Category Name"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="number">Enter Category Number</label>
        <input id="number" type="number" name="category_number"  placeholder="Enter Category Number"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="status">Enter Category Status</label>
        <input id="status" type="text" name="status"  placeholder="Enter Category Status"  class="form-control">
       </div>

       
      

       <div class-"form-group">
        <label for="description">Enter Category Description</label>
        <input id="status" type="text" name="description"  placeholder="Enter Category Description"  class="form-control">
       </div>

      

       



       <button   type="submit"  class="btn btn-success">Create</button>

 </div>

</form>
@endsection