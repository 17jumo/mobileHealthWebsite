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
                    <h2>Course Dates</h2>
                    <hr>
                </div>

                <p>
                    <a class="btn btn-primary mx-1 "
                       href="/coursedates/create">Create new dates</a>
                </p>

                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Course ID</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Scheduled Date</th>
                        <th scope="col">Attendee Max</th>
                        <th scope="col">Venue</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($coursedates as $coursedate)
                        <tr>
                            <th scope="row">{{$coursedate->id}}</th>
                            <th>{{$coursedate->course_id}}</th>
                            <th>Yet to show</th>
                            <td>{{$coursedate->scheduled_date}}</td>
                            <td>{{$coursedate->max_attendee}}</td>
                            <td>{{$coursedate->venue}}</td>
                            <td>
{{--                                <form action="/coursedates/{{$coursedate->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-primary mx-1"
                                           href="/coursedates/{{$coursedate->id}}">Show More</a>
                                        <a class="btn btn-success mx-1" href="/coursedates/{{$coursedate->id}}/edit">Edit</a>
                                        <button type="submit" title="delete" class="btn btn-danger mx-1">Delete</button>
                                    @endauth
                                </form>--}}

                                <form action="/coursedates/{{$coursedate->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-outline-primary mx-1 " href="/coursedates/{{$coursedate->id}}">Show</a>
                                        <a class="btn btn-outline-success mx-1"
                                           href="/coursedates/{{$coursedate->id}}/edit">Edit</a>
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
    </div>

@endsection

