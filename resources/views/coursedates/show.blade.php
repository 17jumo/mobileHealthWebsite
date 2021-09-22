@extends('layouts.app')
@section('content')

    show test course dates

    <a class="btn btn-primary mx-1" href="/">View Courses</a>
    <a class="btn btn-primary mx-1 " href="/coursedates">View Course Dates</a>
    <a class="btn btn-primary mx-1 " href="/bookings">View Bookings</a>

{{--    @foreach($coursedates as $coursedate)

        --}}{{--<h3>{{$coursedate->course_id}}</h3>--}}{{--
        <p>{{$coursedate->id}}</p>

    @endforeach--}}

@endsection
