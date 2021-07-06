<!--================Header Area =================-->
<header class="header_area" style="position: sticky ">
    <div class="container mb-5">
        <nav class="navbar justify-content-end navbar-expand-lg navbar-light">
            <div class="mr-auto" style="font-size: 24px">Royal Hotel</div>
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    View Category
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a href="{{route('rooms.under.category','all')}}">All Room</a>
                    @foreach($categories as $category)
                    <a class="dropdown-item"
                        href="{{route('rooms.under.category',$category->id)}}">{{$category->category_name}}</a>
                    @endforeach
                </div>
            </div>

            <li class="nav-item">
                <span class="nav-link">||</span>
            </li>
            <li class="nav-item">
                <a href="{{route('website')}}">
                    <span class="nav-link @yield('home')">{{__('Home')}}</span></a>
            </li>
            @auth
            <li class="nav-item">
                <a href="{{route('profile')}}"> <span class="nav-link @yield('profile')">{{auth()->user()->name}}</span></a>
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

           



            @endauth
            <div class="dropdown show">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a href="mailto:royalhotel@gmail.com">royalhotel@gmail.com</a>
                    <a href="tel:01752896302">01752896302</a>
                </div>
            </div>
        </ul>
    </div>
    </nav>
</div>
</header>
<!--================Header Area =================-->
