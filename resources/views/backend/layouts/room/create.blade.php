@extends('backend.master')


@section('content')


<form action="{{ route('room.store')}}"  method="post"  enctype="multipart/form-data">
  <div class="col-md-6">
    @csrf
      <div class-"form-group">
        <label for="id">Enter Room Id</label>
        <input id="id" type="number" name="room_id"  placeholder="Enter Room Id"  class="form-control">
       </div>


       <div class-"form-group">
        <label for="number">Enter Room Number</label>
        <input id="number" type="number" name="room_number"  placeholder="Enter Room Number"  class="form-control">
       </div>

       <div class-"form-group">
        <label for="price">Enter Room Price</label>
        <input id="price" type="number" name="room_price"  placeholder="Enter Room Price"  class="form-control">
       </div>


       <div class="form-group">
                <label for="category_id">Select Category:</label>
                <select class="form-control" name="category_id" id="category_id">
                @foreach($categories as $data)
                    <option value="{{$data->id}}">{{$data->category_name}}</option>
                    @endforeach
                </select>
            </div> 


         <div class="form-group">
          <label for="image"> please upload product image</label>
          <input type="file"  name="image" id="image"  class="form-control">
         </div>


       <button   type="submit"  class="btn btn-success">Create</button>





     </div>

</form>



@endsection