@extends('frontend.master')
@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    <body>
        {{-- @dd($room); --}}
        <div class="container" style="padding: 50px">
        	<div class="row">


               <div class="col-xs-4 item-photo">
                    <img style="max-width:100%;" src= "{{('/uploads/room/'.$room->image)}}" />
                </div>


                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{$room->name}}</h3>    
                    <h5 style="color:#337ab7">Room ID - <small style="color:#337ab7">{{$room->id}}</small></h5>
        
                    <!-- Precios -->
                    
                    <h3 style="margin-top:0px;">BDT {{$room->price}}</h3>
        
                    <!-- Detalles especificos del producto -->
                   
                    <div class="section" style="padding-bottom:5px;">
                        <h4 class="title-attr">Room Category</h4>                    
                        <div>
                            <div class="attr2"><h5>{{$room->category_name}}</h5></div>
                       
                        </div>
                    </div>   
                                
        
                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Book</button>
                        </div>                                        
                </div>                              
        
                <div class="col-xs-9">
                   
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                         
                        </p>
                   
                    </div>
                </div>		
            </div>
        </div>        
    </body>
</html>


@endsection