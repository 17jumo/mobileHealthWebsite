@extends('layouts.app')
@section('content')

    <div class="container">


        @if (Auth::check())
            <h4>Mobile Health Administration</h4>

            <a class="btn btn-primary mx-1" href="/">View Courses</a>
            <a class="btn btn-primary mx-1 " href="/coursedates">View Course Dates</a>
            <a class="btn btn-primary mx-1 " href="/bookings">View Bookings</a>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>{{$courses->course_name}}</h2>
                    <hr>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            @method('PUT')
                            @csrf

                            <h3>{{$courses->course_name}}</h3>
                            <h6>Course Description (Long): </h6>
                            <p>{{$courses->course_desc_long}}</p>
                            <h6>Course Duration </h6>
                            <p>{{$courses->duration}}</p>
                            <h6>Start Time: </h6>
                            <p>{{$courses->start_time}}</p>
                            <h6>End Time: </h6>
                            <p>{{$courses->end_time}}</p>
                            <h6>Price: </h6>
                            <p>{{$courses->price}}</p>


                        </div>
                    </div>
                    @auth
                        <span>
                        <a class="btn btn-primary" href="/courses/{{$courses->id}}/edit">Edit Course</a>
                        <a class="btn btn-warning mx-1" href="/courses/">View Course List</a>
                        </span>

                </div>

                {{--<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Field</th>
                            <th scope="col">Entry</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="col">ID</th>
                            <td scope="row">{{$courses->id}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Course Name</th>
                            <th scope="row">{{$courses->course_name}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Description Long</th>
                            <td scope="row">{{$courses->course_desc_long}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Description Short</th>
                            <td scope="row">{{$courses->course_desc_short}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Course Duration</th>
                            <td scope="row">{{$courses->duration}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Start Time</th>
                            <td scope="row">{{$courses->start_time}}</td>
                        </tr>
                        <tr>
                            <th scope="col">End Time</th>
                            <td scope="row">{{$courses->end_time}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Price</th>
                            <td scope="row">{{$courses->price}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                    <a class="btn btn-primary" href="/courses/{{$courses->id}}/edit">Edit Course</a>

                <div class="secondary-button" >
                                        <a href="/bookings/create">Book course</a>
                </div>
                <a class="btn btn-warning mx-1" href="/courses/">View Course List</a>--}}

                @endauth
            </div>
        </div>
    </div>


@endsection

