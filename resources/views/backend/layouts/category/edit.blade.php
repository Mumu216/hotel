@extends('backend.master')


@section('content')


<form action="{{ route('category.update',$categories->id)}}"   method="post">
  <div class="col-md-6">
    @csrf
    @method('PUT')

       <div class-"form-group">
        <label for="number">Enter Category Name</label>
        <input id="name" type="text" name="category_name" value="{{ $categories->category_name }}" class="form-control">
       </div>

       <div class-"form-group">
        <label for="category_number">Enter Category Number</label>
        <input id="category_number" type="number" name="category_number" value="{{ $categories->category_number }}" class="form-control">
       </div>

       <div class-"form-group">
        <label for="status">Enter Category Status</label>
        <input id="status" type="text" name="status" value="{{ $categories->status }}" class="form-control">
       </div>

       <div class-"form-group">
        <label for="description">Enter Category Description</label>
        <input id="description" type="text" name="description" value="{{ $categories->description }}" class="form-control">
       </div>

      
        <br>
       <button   type="submit"  class="btn btn-success">Create</button>

 </div>

</form>
@endsection