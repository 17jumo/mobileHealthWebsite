<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

</head>
<body>

<div class="container">
    <h4>Mobile Health Administration</h4>

    <span style="float: right">

        @if (Auth::check())
            <a class="btn btn-outline-secondary mx-1" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
{{--
            @if (Auth::check(isAdmin))
--}}
            <a class="btn btn-outline-secondary mx-1" href="{{ route('register') }}">Register new Administrator</a>
{{--
            @endif
--}}
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
</div>

<div>
    @yield('content')
</div>

</body>
</html>

