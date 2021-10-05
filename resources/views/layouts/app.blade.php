<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--    Google fonts--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{--    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    {{--    <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&family=Parisienne&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">--}}

    {{--    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">--}}

    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{--Browser Icon--}}
    <link rel="icon" href="/images/MobileHealthTabLogo.png" type="/image/MobileHealthTabLogo.png">

    <title>Mobile Health</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/mobilehealth.css">


    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}
</head>
<body>
<header>

    <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
        <div class="container">

            <a class="navbar-brand d-flex w-25 me-auto nav-img" id="logoimage" href="/"><img
                    src="/images/MobileHealth1.png"
                    alt="Mobile Health Logo"></a>

            <!-- Toggler/collapse Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="nav navbar-nav ms-auto w-100 justify-content-end">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/show">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/bookings/create">Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/contactus">Contact Us</a>
                    </li>
                    <li>
                        <div class="btn-book-primary"><a href="/bookings/create">Book Now</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        </div>
    </nav>


</header>

<main>
    @auth
        <div class="container">
            <h1>Mobile Health Administration</h1>
            <p>Your authorisation level is:&nbsp
                @can('isAdmin')
                    Admin access
                @elsecan('isManager')
                    Manager access
                @else
                    User access
                @endcan
            </p>
            <div style="float: right">
                @if (Auth::check())
                    <a class="btn btn-outline-secondary mx-1" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>

                @else
                    @can('isAdmin')
                        @if (Route::has('register'))
                            <a class="btn btn-outline-secondary mx-1" href="{{ route('login') }}">Login</a>
                        @endif
                    @endcan
                @endif
                <form id="logout-form" class="nav" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

            <a class="btn btn-outline-primary mx-1" href="/courses">View Courses</a>
            <a class="btn btn-outline-primary mx-1 " href="/coursedates">View Course Dates</a>
            <a class="btn btn-outline-primary mx-1 " href="/bookings">View Bookings</a>
            @can('isAdmin')
                <a class="btn btn-outline-primary mx-1 " href="/users">User Admin</a>
            @endcan

{{--            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="/courses">View Courses</a></li>
                <li><a href="/coursedates">View Course Dates</a></li>
                <li><a href="/bookings">View Bookings</a></li>
                @can('isAdmin')
                    <li><a href="/users">User Admin</a></li>
                @endcan
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>--}}
            @endauth

            <div>
                @yield('content')
            </div>
        </div>
</main>


<!-- Footer Starts Here -->
<footer>

    <div class="footer footer-menu footer-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5>Location</h5>
                    <p>18 Glenda Drive </p>
                    <p>Frankton</p>
                    <p>Queenstown</p>
                    <p>PO Box 2036, Queenstown</p>
                    <p>Central&nbspOtago, 9300</p>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5>Contact</h5>
                    <a href="#"><i class="fa fa-phone-square"></i> 03 111 2222</a>
                    <a href="#"><i class="fa fa-phone-square"></i> 0274 423 624</a>
                    <a href="mailto:firstaid@mobilehealth.co.nz" target="_blank">
                        firstaid@mobilehealth.co.nz</a>
                    <p class="social-icons">
                        <a href="https://www.facebook.com/Mobile-Industrial-Health-Services-Engage-Safety-1562735880645278/"
                           target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/mobilehealthqueenstown/about/"
                           target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a></p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5>Other</h5>
                    <ul>
                        <li><a href="https://www.termsfeed.com/live/01b54658-9762-4347-8c16-3fd90e4ec5a3"
                               id="is_terms_agreed"
                               target="_blank">Privacy Policy</a></li>
                        <li><a href="/home/terms" id="is_terms_agreed" target="_blank">Terms and Conditions</a></li>
                        <li>
                            <a href="https://engagesafety.co.nz/" target="_blank">
                                <img src="/images/EngageSafetyLogo.png" alt="Engage Safety Logo"
                                     class="footer-media">&nbspwww.engagesafety.co.nz
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5>Site Map</h5>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/home/show">Courses</a></li>
                        <li><a href="/bookings/create">Book</a></li>
                        <li><a href="/home/aboutus">About Us</a></li>
                        <li><a href="/home/contactus">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Ends Here -->
            <!-- Sub Footer Starts Here -->
            <div class="sub-footer">
                <div class="row col-md-12">
                    <div class="copyright-text">

                        <a href="/courses">Copyright &copy; 2021 Mobile Health | Design by: SIT-SS-DESIGN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Footer Ends Here -->

</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- Additional Scripts -->
{{--<script src="js/custom.js"></script>--}}
{{--<script src="js/owl.js"></script>
<script src="js/isotope.js"></script>--}}
{{--<script src="js/flex-slider.js"></script>--}}


</body>
</html>
