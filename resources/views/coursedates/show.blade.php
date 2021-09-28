@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Course dates</h2>
                    <hr>
                </div>

                @foreach($coursedates as $coursedate)

                            <div class="card" id="coursedate-card">
                                <div class="card-body" >
                                    @method('PUT')
                                    @csrf
                                    <h4 class="card-title" style="text-align: left">First Aid Course</h4>
                                    <h6 class="card-title">Course Date: </h6>
                                    <p class="card-text">{{$coursedate->scheduled_date->format('d-m-Y')}}</p>
                                    <h6 class="card-title">Places available: </h6>
                                    <p class="card-text">{{$coursedate->max_attendee}}</p>
                                    <h6 class="card-title">Venue: </h6>
                                    <p class="card-text">{{$coursedate->venue}}</p>

                                    @if (Auth::check())
                                        <a class="btn btn-primary" href="/coursedates/{{$coursedate->id}}/edit">Edit</a>
                                    <a class="btn btn-warning mx-1" href="/coursedates/">Cancel</a>
                                    @else
                                        <a class="btn btn-book-secondary mx-1" href="/bookings">Select date</a>
                                        <a class="btn btn-warning mx-1" href="/">Cancel</a>
                                            @endif
                                </div>
                            </div>
                @endforeach

                <div class="table-responsive">
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
                            <td scope="row">{{$coursedate->id}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Course ID</th>
                            <td scope="row">{{$coursedate->course_id}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Course Name</th>
                            <td scope="row">course_name - yet to show</td>
                        </tr>
                        <tr>
                            <th scope="col">Course Date</th>
                            <th scope="row">{{$coursedate->scheduled_date->format('d-m-Y')}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Attendee Maximum</th>
                            <th scope="row">{{$coursedate->max_attendee}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Venue</th>
                            <td scope="row">{{$coursedate->venue}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                @auth
                    <a class="btn btn-primary" href="/coursedates/{{$coursedate->id}}/edit">Edit</a>
                @endauth
                <a class="btn btn-warning mx-1" href="/coursedates/">Cancel</a>
            </div>
        </div>
    </div>

@endsection
