@extends('backend.master')

@section('content')


<a class="btn btn-success" href="{{route('category.createform')}}">Catregory Room</a>
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
        @foreach($category_id->categoryRoom as $data)
        <tr>
            <td>{{ $loop->index + 1 }}</th>
            <td>{{ $data->name }}</td>
            <td>{{ $data->room_number }}</td>
            <td>{{ $data->price }}</td>
            <td>
                <img src="{{('/uploads/room/'.$data->image)}}" alt="" style="width: 100px; height:100px" class="rounded-circle">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
