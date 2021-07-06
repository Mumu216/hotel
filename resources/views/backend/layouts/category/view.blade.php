@extends('backend.master')

@section('content')


<a class="btn btn-success" href="{{route('category.createform')}}">View Category</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Room Name</th>
            <th scope="col">Room Number</th>
            <th scope="col">Room Price</th>
            <th scope="col">Room image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories->categoryRoom as $key=>$data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>
                {{ $data->name }}
                
            </td>
            <td>{{ $data->room_number }}</td>
            <td>{{ $data->price }}</td>
            <td>
                <img src="{{('/uploads/room/'.$data->image)}}" alt="" style="width: 100px; height:100px">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
