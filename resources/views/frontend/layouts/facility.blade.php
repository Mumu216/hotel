@extends('frontend.master')

@section('facility')
text-dark font-weight-bold
@endsection

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
            <form action="{{route('facility.info')}}" method="post">
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

           <br>
          <button   type="submit"  class="btn btn-success">Submit</button>

     </div>

    </form>



  @endsection

