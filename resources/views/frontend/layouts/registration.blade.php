{{-- @extends('frontend.master')


@section('content')



<div class="row">

       <div class="col-md-2">

</div>

       <div class="col-md-8">
       <form action="{{route('register')}}"  method="post">
         @csrf
         <h1>User Registration</h1>







          <div class="form-group">
          <label for="name"> Enter User Name:</label>
          <input required class="form-control" type="text" id="name"  name="name" placeholder="Enter User Name">
     </div>


     <div class="form-group">
          <label for="email"> Enter User Email:</label>
          <input required class="form-control" type="email" id="email"  name="email" placeholder="Enter User Email">
     </div>

     <div class="form-group">
          <label for="password"> Enter User Password:</label>
          <input class="form-control" type="password" id="password"  name="password" placeholder="Enter User Password">
     </div>

     <button type="Submit"  class="btn btn-success"> Register</button>

     </form>


    </div>

    <div class="col-md-2">


       </div>




</div>




@endsection --}}





@extends('frontend.master')
@section('content')

<div class="contact_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">

                @if($errors->any())
                    @foreach  ($errors->all()  as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif

                <div class="card">
                    <h3 class="card-header">Sign Up</h3>
                    <div class="card-body">
                        <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name"> Enter Name:</label>
                                <input required class="form-control" type="text" id="name"  name="name" placeholder="Enter User Name">
                            </div>
                            <div class="form-group">
                                <label for="email"> Enter Email:</label>
                                <input required class="form-control" type="email" id="email"  name="email" placeholder="Enter User Email">
                            </div>
                            <div class="form-group">
                                <label for="password"> Enter Password:</label>
                                <input class="form-control" type="password" id="password"  name="password" placeholder="Enter User Password">
                            </div>
                            <div class="form-group">
                                <label for="password"> Enter Number:</label>
                                <input class="form-control" type="number" id="phone_number"  name="phone_number" placeholder="Enter Your Number">
                            </div>
                            <div class="form-group">
                                <label for="password"> Upload Image</label>
                                <input class="form-control" type="file" id="image"  name="image">
                            </div>
                            <div class="form-group">
                                <label for="password"> Enter Your Address</label>
                                <textarea name="address"  class="form-control" id="address" rows="3"></textarea>
                            </div>
                            <button type="Submit"  class="btn btn-success"> Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
