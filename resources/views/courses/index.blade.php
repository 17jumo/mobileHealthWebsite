courses.index.blade

@extends('layouts.app')
@section('content')

    <div class="container">

        <a class="btn btn-primary mx-1" href="/">View Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates">View Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/bookings">View Bookings</a>

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>View all courses</h2>
                    <hr>
                </div>

                <p>
                    <a class="btn btn-primary mx-1 "
                       href="/courses/create">Create new courses</a>
                </p>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">courseName</th>
                        <th scope="col">courseDescLong</th>
                        <th scope="col">courseDescShort</th>
                        <th scope="col">startTime</th>
                        <th scope="col">endTime</th>
                        <th scope="col">price</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <th scope="row">{{$course->id}}</th>
                            <td>{{$course->course_name}} </td>
                            <td>{{$course->course_desc_long}}</td>
                            <td>{{$course->course_desc_short}}</td>
                            <td>{{$course->start_time}}</td>
                            <td>{{$course->end_time}}</td>
                            <td>{{$course->price}}</td>

                            <td>
                                <form action="/courses/{{$course->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-primary mx-1 " href="/courses/{{$course->id}}">Show card</a>
                                        <a class="btn btn-success mx-1"
                                           href="/courses/{{$course->id}}/edit">Edit</a>
                                        <button type="submit" title="delete" class="btn btn-outline-secondary mx-1">
                                            Delete
                                        </button>
                                    @endauth
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
