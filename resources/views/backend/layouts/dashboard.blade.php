@extends('backend.master')


@section('title')

admin-dashboard


@endsection


@section('content')


<div style="display: flex; flex-wrap:wrap">

    <div style="background:white;box-shadow:0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);padding:20px 30px; border-radius:15px;width:20%; margin:5px;border-left:5px solid rgb(13, 167, 214)">
        <h1 style="color: #464141;font-weight:bold; text-transform:uppercase;letter-spacing:2px;font-size:30px">Total Room</h1>
        <p style="color:rgb(128, 128, 128);font-weight:bold;">{{$room}}</p>
    </div>

    <div style="background:white;box-shadow:0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);padding:20px 30px; border-radius:15px;width:20%; margin:5px;border-left:5px solid rgb(13, 167, 214)">
        <h1 style="color: #464141;font-weight:bold; text-transform:uppercase;letter-spacing:2px;font-size:30px">Total Booking</h1>
        <p style="color:rgb(128, 128, 128);font-weight:bold;">{{$booking}}</p>
    </div>
    <div style="background:white;box-shadow:0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);padding:20px 30px; border-radius:15px;width:20%; margin:5px;border-left:5px solid rgb(13, 167, 214)">
        <h1 style="color: #464141;font-weight:bold; text-transform:uppercase;letter-spacing:2px;font-size:30px">Total User</h1>
        <p style="color:rgb(128, 128, 128);font-weight:bold;">{{$user}}</p>
    </div>
    <div style="background:white;box-shadow:0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);padding:20px 30px; border-radius:15px;width:20%; margin:5px;border-left:5px solid rgb(13, 167, 214)">
        <h1 style="color: #464141;font-weight:bold; text-transform:uppercase;letter-spacing:2px;font-size:30px">Total Category</h1>
        <p style="color:rgb(128, 128, 128);font-weight:bold;">{{$category}}</p>
    </div>
    <div style="background:white;box-shadow:0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);padding:20px 30px; border-radius:15px;width:20%; margin:5px;border-left:5px solid rgb(13, 167, 214)">
        <h1 style="color: #464141;font-weight:bold; text-transform:uppercase;letter-spacing:2px;font-size:30px">Total Payment</h1>
        <p style="color:rgb(128, 128, 128);font-weight:bold;">{{$payment}}</p>
    </div>
    
    

</div>


@endsection