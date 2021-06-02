@extends('backend.master')


@section('content')


<form action="{{ route('category.update',$categories->id)}}"   method="post">
  <div class="col-md-6">
    @csrf
    @method('PUT')

     


       <div class-"form-group">
        <label for="number">Enter Category Name</label>
        <input id="name" type="text" name="category_name"  placeholder="Enter Category Name"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="status">Enter Category Status</label>
        <input id="status" type="text" name="status"  placeholder="Enter Category Status"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="description">Enter Category Description</label>
        <input id="status" type="text" name="description"  placeholder="Enter Category Description"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="image">Enter Category Image</label>
        <input id="image" type="text" name="image"  placeholder="Enter Category Image"  class="form-control">
       </div>


       



       <button   type="submit"  class="btn btn-success">Create</button>

 </div>

</form>
@endsection