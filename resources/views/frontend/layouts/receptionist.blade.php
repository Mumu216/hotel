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
            <form action="{{route('receptionist.data')}}" method="post">
                @csrf


                <div class-"form-group">
                    <label for="id">Enter Receptionist Id</label>
                    <input id="id" type="number" name="id"  placeholder="Enter  Receptionist Id "  class="form-control">
                   </div>
            
            
                   <div class-"form-group">
                    <label for="receptionist_name">Enter Receptionist Name </label>
                    <input id="receptionist_name" type="text" name="receptionist_name"  placeholder="Enter Receptionist Name "  class="form-control">
                   </div>
            
                   <div class-"form-group">
                    <label for="email">Enter Receptionist Email </label>
                    <input id="email" type="text" name="email"  placeholder="Enter Receptionist Email "  class="form-control">
                   </div>
            
            
                   <div class-"form-group">
                    <label for="password">Enter Receptionist Password </label>
                    <input id="password" type="number" name="password"  placeholder="Enter  Receptionist Password "  class="form-control">
                   </div>
            
                   
                   <div class-"form-group">
                    <label for="phone_number">Enter Receptionist PhoneNumber </label>
                    <input id="phone_numbe" type="number" name="phone_number"  placeholder="Enter Receptionist PhoneNumber  "  class="form-control">
                   </div>
               
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form>
    </div>
</div>


@endsection
