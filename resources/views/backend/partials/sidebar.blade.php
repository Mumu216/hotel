<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
      <div class="position-sticky pt-3" style="background-color: rgb(0, 0, 0);height:100vh">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('dashboard')}}">
              <span data-feather="home"></span>
              Dashboard
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.login')}}">
              <span data-feather="file"></span>
              Admin
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users')}}">
              <span data-feather="file"></span>
              User
            </a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="{{route('show.booking')}}">
              <span data-feather="file"></span>
              Booking
            </a>
          </li>

             <li class="nav-item">
            <a class="nav-link" href="{{ route('order.orderlist')}}">
              <span data-feather="file"></span>
              Order
            </a>
          </li>

          
            
          <li class="nav-item">
            <a class="nav-link" href="{{route('payment.list')}}">
              <span data-feather="file"></span>
              payment
            </a>
          </li>


            
          <li class="nav-item">
            <a class="nav-link" href="{{route('category.list')}}">
              <span data-feather="file"></span>
               Category
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('roomtype.list')}}">
              <span data-feather="file"></span>
              Room Type
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('room.list')}}">
              <span data-feather="file"></span>
              Room 
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('receptionist.list')}}">
              <span data-feather="file"></span>
              Receptionist 
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('facility.list')}}">
              <span data-feather="file"></span>
              Facility
            </a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="{{route('roomservice.list')}}">
              <span data-feather="file"></span>
              Room Service 
            </a>
          </li>


            <li class="nav-item">
            <a class="nav-link" href="{{route('booking.report')}}">
              <span data-feather="file"></span>
              Report
            </a>
          </li>

            
        </ul>
      </div>
    </nav>