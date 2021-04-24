
@extends('frontend.master1')


@section('content')
@if(session()->has('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div>
@endif

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">



      @foreach($all_room as $data)
        <div class="col">
          <div class="card shadow-sm">

       <img width="200px;" height="200px;" src="{{url('/uploads/room/'.$data->image)}}" alt="">
            <div class="card-body">
              <p class="card-text">{{$data->category_name}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Buy now</button>
                </div>
                <small class="text-muted"> {{$data->price}}.Tk</small>
              </div>
            </div>
          </div>
        </div>


      @endforeach


@endsection