@extends('frontend.master')


@section('content')

       

<div class="row">

       <div class="col-md-2">
       
</div>

       <div class="col-md-8">
       <form action="{{route('register')}}"  method="post">
         @csrf
         <h1>User Registration</h1>

         @if($errors->any())
             
             @foreach  ($errors->all()  as $error)
               <div class="alert alert-danger">{{$error}}</div>
          @endforeach
       @endif

       @if(session()->has('success'))

       <div class="alert alert-success">{{session()->get('success')}}</div>

 @endif





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
      
      
     

@endsection