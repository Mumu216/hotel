<li class="nav-item">
    <a href="{{route('website')}}">
        <span class="nav-link @yield('home')">{{__('Home')}}</span></a>
</li>
@auth
<li class="nav-item">
    <a href="{{route('profile')}}"> <span
            class="nav-link @yield('profile')">{{auth()->user()->name}}</span></a>
</li>
<li class="nav-item">
    @if (!is_null(checkBookingTime()->check_out))
    <span class="text-dark font-weight-bold">Check Out:</span> {{ checkBookingTime()->check_out }}
    @elseif (is_null(checkBookingTime()->check_out))
    <span class="text-dark font-weight-bold">Check in:</span> {{ checkBookingTime()->check_in }}
    @endif
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('logout')}}">Logout</a>
</li>
@else
<li class="nav-item">
    <a class="nav-link" href="{{route('login.form')}}">Login</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('registration.form')}}">Registration</a>
</li>