@extends('backend.master')


@section('content')


<form action="{{ route('room.store')}}"  method="post"  enctype="multipart/form-data">
  <div class="col-md-6">
    @csrf
      <div class-"form-group">
        <label for="id">Enter Room Id</label>
        <input id="id" type="number" name="id"  placeholder="Enter Room Id"  class="form-control">
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
        <label for="roomtype_id">Select Room Type:</label>
        <select class="form-control" name="roomtype_id" id="roomtype_id">
        @foreach($roomtypes as $data)
            <option value="{{$data->id}}">{{$data->roomtype_name}}</option>
            @endforeach
        </select>
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
                <label for="facility_id">Select Facility:</label>
                <select class="form-control" name="facility_id" id="facility_id">
                @foreach($facilities as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
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
