@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card card-body card-login w-50">
            <img src="/images/MobileHealthTabLogo.png"
                 alt="Mobile Health Logo">

            <h5>Administrator Login</h5>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row">

                    <!-- Email Address -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input name="email" type="text" class="form-control" placeholder="Email *" value=""/>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="col-md-12">
                        <div class="form-group content-start">
                            <label for="password">Password*</label>
                            <input name="password" type="password" class="form-control" placeholder="Password"
                                   value=""/>
                        </div>
                    </div>
                </div>
                <br>
                <input class="btn btn-primary" type="submit" value="Submit">
                <a href="/"></a>
                <a class="btn btn-outline-dark" href="/">{{ __('Cancel') }}</a>
                <a class="btn btn-outline-dark" href="{{ route('password.request') }}">Reset Password </a>
            </form>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

@endsection

