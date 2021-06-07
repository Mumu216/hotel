<!--================Header Area =================-->
<header class="header_area" style="position: sticky ">
    <div class="container">
        <nav class="navbar justify-content-end navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
          <!-- <a class="navbar-brand logo_h" href="index.html"><img src="image/Logo.png" alt=""></a>-->
         <!--   <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
           <!-- <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav m-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="accomodation.html">Accomodation</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false">Blog</a>


                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog
                                    Details</a></li>
                        </ul>
                    </li>


                   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->

                    
                   <div class="mr-auto" style="font-size: 24px">Royal Hotel</div>
                  <div class="dropdown show">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         View Category
                      </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a href="{{route('rooms.under.category','all')}}">All Room</a>
                       @foreach($categories as $category)
                           <a class="dropdown-item" href="{{route('rooms.under.category',$category->id)}}">{{$category->category_name}}</a>
                      @endforeach
                  </div>
                 </div>


                 <li class="nav-item">
                    <span class="nav-link">||</span>
                </li>


                  <a href=""><span class="badge badge-success">Cart(0)</span></a>


                    <li class="nav-item">
                        <span class="nav-link">||</span>
                    </li>
                    @auth
                        <li class="nav-item">
                             <span class="nav-link text-success ">{{auth()->user()->name}}</span>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('profile')}}">
                             <span class="nav-link text-success ">{{__('Profile')}}</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('payment')}}">Payment</a>
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
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--================Header Area =================-->
