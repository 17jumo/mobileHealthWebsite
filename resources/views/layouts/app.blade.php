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

        <ul class="nav">
            <li>
                @if (Auth::check())
                    <a class="btn btn-outline-secondary mx-1" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
                    {{--<a href="{{ route('logout') }}" id="navLogout" class="nav" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>--}}
            </li>
            <li>
                {{--            <a class="nav" href="profiles/index">Profile</a>--}}
                <a class="btn btn-outline-secondary mx-1" href="/profiles/index">profiles.index</a>
{{--                <a href="/profiles/index">
                    profiles.index</a>--}}
            </li>
            <li>
                @else
                    {{--            <a class="nav" id="navRegister" href="/auth/register/">Register</a>--}}
                    {{-- <a href="{{ route('login') }}" class="nav">Login</a>--}}

                    @if (Route::has('register'))
                        <a class="btn btn-outline-secondary mx-1" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-outline-secondary mx-1" href="{{ route('register') }}">Register</a>

                        {{--<a class="nav" href="{{ route('login') }}" id="navRegister">Login</a>--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                        <a class="nav" href="{{ route('register') }}" id="navRegister">Register</a>--}}
                    @endif
            </li>


            {{--            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                    @endif
                                @endauth--}}


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




