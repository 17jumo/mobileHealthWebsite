@extends('layouts.app')
@section('content')

    <div class="container">
        <h4>Mobile Health Administration</h4>

        <a class="btn btn-primary mx-1" href="/">View Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates">View Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/bookings">View Bookings</a>

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Show the course as a card</h2>
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
                            <h6>Course Description (Short): </h6>
                            <p>{{$courses->course_desc_short}}</p>
                            <h6>Start Time: </h6>
                            <p>{{$courses->start_time}}</p>
                            <h6>End Time: </h6>
                            <p>{{$courses->end_time}}</p>
                            <h6>Price: </h6>
                            <p>{{$courses->price}}</p>


                        </div>
                    </div>
                    @auth
                        <a class="btn btn-primary" href="/courses/{{$courses->id}}/edit">Edit Course</a>
                    @endauth
                    <a class="btn btn-warning mx-1" href="/courses/">View Course List</a>
                </div>


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
                    <tr>
                        <td colspan="2">
                            @auth
                                <a class="btn btn-primary" href="/courses/{{$courses->id}}/edit">Edit Course</a>
                            @endauth
                            <a class="btn btn-warning mx-1" href="/courses/">View Course List</a>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


@endsection

{{--<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card">
        <div class="card-body">

            @method('PUT')
            @csrf

            <h3>{{$courses->course_name}}</h3>
            <h6>Course Description (Long): </h6>
            <p>{{$courses->course_desc_long}}</p>
            <h6>Course Description (Short): </h6>
            <p>{{$courses->course_desc_short}}</p>
            <h6>Start Time: </h6>
            <p>{{$courses->start_time}}</p>
            <h6>End Time: </h6>
            <p>{{$courses->end_time}}</p>
            <h6>Price: </h6>
            <p>{{$courses->price}}</p>

            @auth
                <a class="btn btn-primary" href="/courses/{{$courses->id}}/edit">Edit Course</a>
            @endauth
            <a class="btn btn-warning mx-1" href="/courses/">View Course List</a>
        </div>
    </div>
</div>--}}
