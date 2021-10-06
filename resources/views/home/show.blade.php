@extends('layouts.app')
@section('content')

    {{--@if (Auth::check())
    </div>
    </div>
    @endif--}}

    @if (Auth::check())
    @else
        <div class="container">
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h1>First Aid Courses Available</h1>
                        <hr>
                    </div>
                    @foreach($courses as $course)
                        <div class="card card-body w-75 mt-2 card-login">
                            <div class="row no-gutters">
                                <div class="col-md-4 text-center">
                                    <img src="/images/index/heart.png" alt="Course Icon">

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$course->course_name}}</h5>
                                        <h6 class="card-title">${{$course->price}}</h6>
                                        <br><br>
                                        <p class="card-text">{{$course->course_desc_long}}</p>
                                        <br><br>
                                        <p class="card-text text-muted">Duration: &nbsp{{$course->duration}}
                                            @if($course->duration > 1)
                                                days
                                            @else
                                                day
                                            @endif</p>
                                        <p class="card-text text-muted">
                                            Starts at: &nbsp{{ date('G:i', strtotime($course->start_time)) }}
                                            &nbsp&nbsp&nbsp&nbsp
                                        </p>
                                        <p class="card-text text-muted">
                                            Ends at: &nbsp{{ date('G:i', strtotime($course->end_time)) }}</p>

                                        {{--                @if (Auth::check())
                                                            <a class="btn btn-primary" href="/courses/{{$course->id}}/edit">Edit</a>
                                                            <a class="btn btn-warning mx-1" href="/courses/">Cancel</a>
                                                        @else--}}
                                        <a class="btn btn-book" href="/bookings/create">Book now</a>
                                        {{--                @endif--}}
                                    </div>
                                </div>
                            </div>
                        </div>
        @endforeach

@endsection
