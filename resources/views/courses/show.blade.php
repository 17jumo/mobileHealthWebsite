@extends('layouts.app')
@section('content')

    @if (Auth::check())
    @else
        <div class="container">
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">

                    </div>

                    <div class="card wd-100">
                        <div class="card-body">
                            @method('PUT')
                            @csrf
                            <h5 class="card-title" style="text-align: left">{{$courses->course_name}}</h5>
                            <h6 class="card-text">Course Description</h6>
                            <p class="card-text">{{$courses->course_desc_long}}</p>
                            <h6 class="card-text">Price</h6>
                            <p class="card-text">{{$courses->price}}</p>
                            <h6 class="card-text">Duration</h6>
                            <p class="card-text">{{$courses->duration}}
                                @if($courses->duration > 1)
                                    days
                                @else
                                    day
                                @endif
                            </p>
                            <h6 class="card-text">Start Time</h6>
                            <p class="card-text">{{$courses->start_time}}</p>
                            <h6 class="card-text">End time</h6>
                            <p class="card-text">{{$courses->end_time}}</p>

                        </div>
                    </div>



                    @if (Auth::check())
                        <a class="btn btn-primary" href="/courses/{{$courses->id}}/edit">Edit</a>
                        <a class="btn btn-warning mx-1" href="/courses/">Cancel</a>
                    @else
                        <a class="btn btn-info" href="/bookings/create">Book now</a>
                        <a class="btn btn-outline-dark" href="/">Cancel</a>
                    @endif

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


                </div>
            </div>


@endsection

