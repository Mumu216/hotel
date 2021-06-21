@extends('backend.master')

@section('content')


<a class="btn btn-success" href="{{route('receptionist.createform')}}"> Create ReceptionistForm </a>

<table class="table">

    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Id</th>
            <th scope="col">Receptionist Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
        </tr>
    </thead>
    <tbody>
		{{-- {{ $receptionist_list }} --}}
        @foreach($receptionist_list as $key=> $data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>
                @isset($data->userReceptionist->receptionist_id)
                {{ $data->userReceptionist->receptionist_id }}
                @endisset
            </td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone_number}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
