@extends('frontend.master')

@section('content')

<div class="contact_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">

                @if($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif

                @if(session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif

                <div class="card">
                    <h3 class="card-header">User Login</h3>
                    <div class="card-body">
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email"> Enter User Email:</label>
                                <input required class="form-control" type="email" id="email"
                                    name="email" placeholder="Enter User Email">
                            </div>
                            <div class="form-group">
                                <label for="password"> Enter User Password:</label>
                                <input class="form-control" type="password" id="password"
                                    name="password" placeholder="Enter User Password">
                            </div>
                            <button type="Submit" class="btn btn-success"> Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="row">
    <div class="col-md-6 m-auto">
        <form action="{{route('login')}}" method="post">
@csrf
@if($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif

@if(session()->has('success'))
<div class="alert alert-success">{{session()->get('success')}}</div>
@endif

<h1>User Login</h1>
<div class="form-group">
    <label for="email"> Enter User Email:</label>
    <input required class="form-control" type="email" id="email" name="email"
        placeholder="Enter User Email">
</div>
<div class="form-group">
    <label for="password"> Enter User Password:</label>
    <input class="form-control" type="password" id="password" name="password"
        placeholder="Enter User Password">
</div>
<button type="Submit" class="btn btn-success"> Login</button>
</form>
</div>
</div> --}}



@endsection
