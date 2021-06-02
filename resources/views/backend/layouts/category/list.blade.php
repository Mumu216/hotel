@extends('backend.master')

@section('content')


<a class="btn btn-success" href="{{route('category.createform')}}"> Create New category </a>

<table class="table table-bordered">
  <thead>
  <tr>

      <th scope="col">#</th>
      <!--<th scope="col">ID</th>-->
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>



    </tr>
      </thead>
      <tbody>
      @foreach($category_list as $key=>$data)
      <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->category_name}}</td>
          <td>{{$data->status}}</td>
          <td>{{$data->description}}</td>
          <td>{{$data->image}}</td>


          <td>
           
            <a class="btn btn-success" href="{{route('category.edit',$data->id)}}">Edit</a>
            <a class="btn btn-danger" href="{{route('category.delete',$data->id)}}">Delete</a>

            </td>


          </tr>
          @endforeach
          </tbody>
    </table>

@endsection