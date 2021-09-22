<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>activityDOCK</title>



        {{--    Google fonts--}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
              rel="stylesheet">

        {{--Browser Icon--}}
        <link rel="icon" href="/images/MobileHealthTabLogo.png" type="/image/MobileHealthTabLogo.png">

        <title>Mobile Health</title>

        <!-- Bootstrap core CSS -->
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="/css/fontawesome.css">
        <link rel="stylesheet" href="/css/mobilehealth.css">
        {{--    <link rel="stylesheet" href="/css/owl.css">
            <link rel="stylesheet" href="/css/flex-slider.css">--}}

    </head>


</head>
<body>



{{--Navbar--}}

<div class="navbar">
        <a class="logoImage" href="/">

        </a>
    <a class="logoText" id="actDOCK" href="/">activityDOCK</a>

    <ul class="nav">
        <li>
            @if (Auth::check())
                <a href="{{ route('logout') }}" id="navLogout" class="nav" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
        <li>
{{--            <a class="nav" href="profiles/index">Profile</a>--}}
            <a href="/profiles/index">
            xxx</a>

        </li>
        @else
{{--            <a class="nav" id="navRegister" href="/auth/register/">Register</a>--}}
            {{-- <a href="{{ route('login') }}" class="nav">Login</a>--}}

            @if (Route::has('register'))
                <a class="nav" href="{{ route('register') }}" id="navRegister">Register</a>
            @endif



{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}


        @endif
        <form id="logout-form" class="nav" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </li>
    </ul>
</div>
<div>
    @yield('content')
</div>
</body>
</html>
















{{--Old Navbars--}}


{{--<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">--}}
{{--    <a class="navbar-brand" href="/">activityDOCK</a>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">--}}

{{--        <ul class="navbar-nav mr-auto">--}}
{{--            <li class="nav-item active">--}}
{{--                <a class="nav-link" href="#">Left</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="//codeply.com">Codeply</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">Link</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">Link</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">Link</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <div class="mx-auto order-0">--}}
{{--        <a class="navbar-brand mx-auto" href="#">Navbar 2</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 navbar-right">--}}
{{--        <ul class="navbar-nav mr-auto">--}}
{{--            <li>--}}
{{--                @if (Auth::check())--}}
{{--                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();--}}
{{--                        document.getElementById('logout-form').submit();">Logout</a>--}}
{{--                @else--}}
{{--                    <a href="{{ route('login') }}" class="nav-link">Login</a>--}}
{{--                @endif--}}
{{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="nav-link navbar-right" href="/auth/register/">Register</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</nav>--}}







{{--<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">--}}
{{--    <div class="container-fluid">--}}
{{--    <a class="navbar-brand" href="/">activityDOCK</a>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}

{{--    <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--        <ul class="navbar-nav mr-auto">--}}
{{--            <li>--}}
{{--                @if (Auth::check())--}}
{{--                    <a href="{{ route('logout') }}" class="text-sm text-gray-700 float-right mr-3" onclick="event.preventDefault();--}}
{{--                        document.getElementById('logout-form').submit();">Logout</a>--}}
{{--                @else--}}
{{--                    <a href="{{ route('login') }}" class="text-sm text-gray-700 float-right mr-3">Login</a>--}}
{{--                @endif--}}
{{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </li>--}}
{{--        </ul>--}}



{{--        <div class="mx-auto order-0">--}}
{{--            <a class="navbar-brand mx-auto" href="#">Navbar 2</a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Right</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Link</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--</nav>--}}


{{--        <form class="d-flex">--}}
{{--            <a class="nav-link" href="/auth/register/">Register</a>--}}
{{--        </form>--}}


{{--    </div>--}}
{{--    </div>--}}
{{--</nav>--}}



