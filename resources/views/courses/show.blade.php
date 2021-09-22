@extends('layouts.app')
@section('content')

    <div class="container">

        <a class="btn btn-primary mx-1" href="/courses/show">View and Amend Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates/show">View and Amend Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/books/show">View and Amend Booking</a>

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Courses - SHOW</h2>
                    <hr>
                </div>

    <div class="container">

        <div class="row">
            Edit Course
            <hr>
            @auth
                <div class="buttonContainer">
                    <a class="btn btn-primary" href="/courses/{{$course->id}}/edit">Edit Course</a>
                </div>
            @endauth
            {{--<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">--}}
            <div class="card">
                <div class="card-body">

                    @method('PUT')
                    @csrf

                    <h3>{{$course->courseName}}</h3>
                    <h6>Course Description (Long): </h6>
                    <p>{{$course->courseDescLong}}</p>
                    <h6>Course Description (Short): </h6>
                    <p>{{$course->courseDescShort}}</p>
                    <h6>Start Time: </h6>
                    <p>{{$course->startTime}}</p>
                    <h6>End Time: </h6>
                    <p>{{$course->endTime}}</p>
                    <h6>Price: </h6>
                    <p>{{$course->price}}</p>
                    <h6>Location: </h6>
                    <p>{{$course->location}}</p>

                    @auth
                            <a class="btn btn-primary" href="/courses/{{$course->id}}/edit">Edit Course</a>
                    @endauth
                    <a class="btn btn-primary" href="/books/{{$course->id}}/edit">Edit Course</a>
                    <a class="btn btn-warning mx-1" href="/courses/">Cancel</a>
                </div>
            </div>
        </div>
    </div>

@endsection
