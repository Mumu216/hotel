@extends('frontend.master')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            @if(session()->has('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{ session()->get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <form action="{{route('roomservice.info')}}" method="post">
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
                  <br>
                   <button   type="submit"  class="btn btn-success">Submit</button>
            
             </div>
            
            </form>
            
            @endsection