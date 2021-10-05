@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card card-body card-login w-50 align-items-left">
{{--            <img src="/images/MobileHealthTabLogo.png"
                 alt="Mobile Health Logo">--}}
            <h4>Reset Password</h4>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row">
                    <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

                    <!-- Email Address -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input name="email" type="text" class="form-control" {{--placeholder="Email *" --}}value="{{ __('Email') }}" autofocus />
                        </div>
                    </div>
{{--
                    <!-- Password -->
                    <div class="col-md-12">
                        <div class="form-group content-start">
                            <label for="password">Password*</label>
                            <input name="password" type="password" class="form-control" placeholder="Password"
                                   value=""/>
                        </div>
                    </div>--}}
                </div>
                <br>
{{--                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>--}}
{{--                <input class="btn btn-primary" type="submit" value="Login">--}}
                <a class="btn btn-primary" href="/">{{ __('Email Password Reset Link') }}</a>
{{--                <a class="btn btn-outline-dark" href="{{ route('password.request') }}">Reset Password </a>--}}
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


{{--


<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}
