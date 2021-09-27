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
    <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
    {{--font-family: 'Petit Formal Script', cursive;--}}
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    {{--font-family: 'Rouge Script', cursive;--}}


    {{--Browser Icon--}}
    <link rel="icon" href="/images/MobileHealthTabLogo.png" type="/image/MobileHealthTabLogo.png">

    <title>Mobile Health</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/mobilehealth.css">

</head>
<body>
<header>

    {{--new navbar--}}

    <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
        <div class="container">

            <a class="navbar-brand d-flex w-25 me-auto nav-img" id="logoimage" href="/"><img
                    src="/images/MobileHealth1.png"
                    alt="Mobile Health Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-333"
                    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent-333">
                {{--            </a>--}}
                {{--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
                    <span class="navbar-toggler-icon"></span>
                </button>--}}
                <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
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
                        <li class="nav-item">
                            <a class="nav-link" href="/home/payment">Payment</a>
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
            <h4>Mobile Health Administration</h4>
            <div style="float: right">
                @if (Auth::check())
                    <a class="btn btn-outline-secondary mx-1" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
                    {{--
                                @if (Auth::check(isAdmin))
                    --}}
                    <a class="btn btn-outline-secondary mx-1" href="{{ route('register') }}">Register new
                        Administrator</a>
                    {{--
                                @endif
                    --}}
                @else
                    @if (Route::has('register'))
                        <a class="btn btn-outline-secondary mx-1" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-outline-secondary mx-1" href="{{ route('register') }}">Register new
                            Administrator</a>
                    @endif
                @endif
                <form id="logout-form" class="nav" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

            <a class="btn btn-outline-primary mx-1" href="/courses">View Courses</a>
            <a class="btn btn-outline-primary mx-1 " href="/coursedates">View Course Dates</a>
            <a class="btn btn-outline-primary mx-1 " href="/bookings">View Bookings</a>

            @endauth

            <div>
                @yield('content')
            </div>
        </div>
</main>


<!-- Footer Starts Here -->
<footer>

    <div class="footer footer-item">
        <div class="container">
            <div class="row">
                <div class="footer-container">
                    <div class="flex-column footer-flex1">
                        <div class="footer-item">
                        <a href="/">
                            <img src="/images/MobileHealth1.png" alt="Company Logo"
                                          title="Mobile Health Logo" id="logoimage"
                                          class="logo">
                        </a>
                        </div>
                    </div>
                    <div class="flex-column footer-flex2">
                        <p>18 Glenda Drive, Frankton, Queenstown, Central&nbspOtago, 9300</p>
                        <p>PO Box 2036, Queenstown</p>
                        <p>
                            <a href="#"><i class="fa fa-phone-square"></i>&nbsp03&nbsp111&nbsp2222</a> &nbsp;
                            <a href="#"><i class="fa fa-phone-square"></i>&nbsp0274&nbsp423&nbsp624</a>
                        </p>
                        <p>
                            <a href="mailto:firstaid@mobilehealth.co.nz" target="_blank"><i
                                    class="fa fa-envelope"></i>
                                firstaid@mobilehealth.co.nz</a>
                        </p>

                        <p>
                            <a href="https://engagesafety.co.nz/" target="_blank">
                                <img src="/images/EngageSafetyLogo.png" alt="Engage Safety Logo"
                                     class="footer-media">&nbsp
                                www.engagesafety.co.nz
                            </a>
                        </p>

                        <div class="social-icons">
                            <a href="https://www.facebook.com/Mobile-Industrial-Health-Services-Engage-Safety-1562735880645278/"
                               target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/mobilehealthqueenstown/about/" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        {{--<div class="course-container-box">
            <div class="footer-item">

                <p>18 Glenda Drive, Frankton, Queenstown, Central&nbspOtago, 9300</p>
                <p>PO Box 2036, Queenstown</p>
                <p>
                    <a href="#"><i class="fa fa-phone-square"></i>&nbsp03&nbsp111&nbsp2222</a> &nbsp;
                    <a href="#"><i class="fa fa-phone-square"></i>&nbsp0274&nbsp423&nbsp624</a>
                </p>
                <p>
                    <a href="mailto:firstaid@mobilehealth.co.nz" target="_blank"><i
                            class="fa fa-envelope"></i>
                        firstaid@mobilehealth.co.nz</a>
                </p>
            </div>
            <div>
                <p>
                    <a href="https://engagesafety.co.nz/" target="_blank">
                        <img src="/images/EngageSafetyLogo.png" alt="Engage Safety Logo"
                             class="footer-media">&nbsp
                        www.engagesafety.co.nz
                    </a>
                </p>
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.com/Mobile-Industrial-Health-Services-Engage-Safety-1562735880645278/"
                   target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://www.linkedin.com/company/mobilehealthqueenstown/about/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
        </div>
        --}}{{--<div class="course-container-box">
            <div>
                <p>
                    <a href="https://engagesafety.co.nz/" target="_blank">
                        <img src="/images/EngageSafetyLogo.png" alt="Engage Safety Logo"
                             class="footer-media">&nbsp
                        www.engagesafety.co.nz
                    </a>
                </p>
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.com/Mobile-Industrial-Health-Services-Engage-Safety-1562735880645278/"
                   target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://www.linkedin.com/company/mobilehealthqueenstown/about/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
        </div>--}}{{--
    </div>
</div>--}}

        <!-- Footer Ends Here -->

            <!-- Sub Footer Starts Here -->
            <div class="sub-footer">
                <div class="row col-md-12">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2021 Mobile Health | <a href="/courses">Design by:
                                SIT-SS-DESIGN</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Footer Ends Here -->

    {{--    <div class="container">
        <span style="float: right">

            @if (Auth::check())
                <a class="btn btn-outline-secondary mx-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Logout</a>
                --}}{{--
                            @if (Auth::check(isAdmin))
                --}}{{--
                <a class="btn btn-outline-secondary mx-1" href="{{ route('register') }}">Register new Administrator</a>
                --}}{{--
                            @endif
                --}}{{--
            @else
                @if (Route::has('register'))
                    <a class="btn btn-outline-secondary mx-1" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-outline-secondary mx-1" href="{{ route('register') }}">Register new Administrator</a>
                @endif
            @endif
                <form id="logout-form" class="nav" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

        </span>
        </div>--}}
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
{{--<script src="js/custom.js"></script>--}}
{{--<script src="js/owl.js"></script>
<script src="js/isotope.js"></script>--}}
{{--<script src="js/flex-slider.js"></script>--}}


</body>
</html>


