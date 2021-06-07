<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title> @yield('title') </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Favicons -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }php
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.css" rel="styleheet">
  </head>
  <body>





<div class="row">

       <div class="col-md-3">
       
</div>

    <div class="col-md-6" style="padding:50px; ">
       
       <form action="{{route('password.reset.post')}}"  method="post">
         @csrf
         <h1> Write your registered email</h1>
         @if(session()->has('success'))

          <div class="alert alert-success">
             {{session()->get('success')}}  
          
          </div>

    @endif

         @if($errors->any())
             
             @foreach  ($errors->all()  as $error)
               <div class="alert alert-danger">{{$error}}</div>
          @endforeach
       @endif

    


       


     
       <div class="form-group">
          <label for="exampleInputEmail1"  class="form-label1"> Enter new password:</label>
          <input required name="password" type="password" id="password"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>


     <div class="form-group">
          <label for="exampleInputEmail1"  class="form-label1"> Enter Password Again:</label>
          <input required name="password_confirmation" type="password" id="password"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>

     

     <input type="hidden"  value="{{$token}}"  name="token">
     <input type="hidden"  value="{{$email}}"  name="email">


     


     <button type="Submit"  class="btn btn-success"> Submit</button>

     </form>
       
       
    </div>

    <div class="col-md-3">
       
       
       </div>



       
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" ></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" ></script>
    <script src="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.js"></script>

    
  </body>
</html>