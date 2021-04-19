<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
      <div class="position-sticky pt-3">
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
            <a class="nav-link" href="{{ route('users')}}">
              <span data-feather="file"></span>
              User
            </a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="{{route('booking.bookinglist')}}">
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
            <a class="nav-link" href="{{route('facilities')}}">
              <span data-feather="file"></span>
              Facilities 
            </a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="{{route('room service')}}">
              <span data-feather="file"></span>
              Room Service 
            </a>
          </li>


         
         
            
        </ul>
      </div>
    </nav>