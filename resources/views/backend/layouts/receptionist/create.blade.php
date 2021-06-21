@extends('backend.master')

@section('content')




<form action="{{ route('receptionist.store')}}"  method="post">
  <div class="col-md-6">
    @csrf
      <div class-"form-group">
       <div class-"form-group">
        <label for="name">Enter Receptionist Name </label>
        <input id="name" type="text" name="name"  placeholder="Enter Receptionist Name "  class="form-control">
       </div>

       <div class-"form-group">
        <label for="email">Enter Receptionist Email </label>
        <input id="email" type="email" name="email"  placeholder="Enter Receptionist Email "  class="form-control">
       </div>


       <div class-"form-group">
        <label for="password">Enter Receptionist Password </label>
        <input id="password" type="password" name="password"  placeholder="Enter Receptionist Password "  class="form-control">
       </div>


       <div class-"form-group">
        <label for="phone_number">Enter Receptionist PhoneNumber </label>
        <input id="phone_number" type="number" name="phone_number"  placeholder="Enter Receptionist PhoneNumber  "  class="form-control">
       </div>

       <div class="form-check">
        <input class="form-check-input" type="checkbox" name="role" value="receptionist" id="role">
        <label class="form-check-label" for="role">
         Make a Receptionist
        </label>
      </div>
       <button   type="submit"  class="btn btn-success">Create</button>



     </div>

</form>


@endsection
