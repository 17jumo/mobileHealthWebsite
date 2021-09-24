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
                    <h2>View Bookings</h2>
                    <hr>
                </div>

                <p>
                    <a class="btn btn-primary mx-1 "
                       href="/bookings/create">Create new booking</a>
                </p>

                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Company Name</th>
{{--                        <th scope="col">Street</th>
                        <th scope="col">Suburb</th>
                        <th scope="col">City</th>
                        <th scope="col">Postcode</th>
                        <th scope="col">Country</th>--}}
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <th scope="row">{{$booking->id}}</th>
                            <td>{{$booking->first_name}} </td>
                            <td>{{$booking->last_name}}</td>
                            <td>{{$booking->email}}</td>
                            <td>{{$booking->dob}}</td>
                            <td>{{$booking->gender}}</td>
                            <td>{{$booking->phone}}</td>
                            <td>{{$booking->company_name}}</td>
    {{--                        <td>{{$booking->add_street}}</td>
                            <td>{{$booking->add_suburb}}</td>
                            <td>{{$booking->add_city}}</td>
                            <td>{{$booking->add_postcode}}</td>
                            <td>{{$booking->add_country}}</td>--}}
                            <td>
{{--                                <form action="/bookings/{{$booking->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-primary mx-1"
                                           href="/bookings/{{$booking->id}}">Show More</a>
                                        <a class="btn btn-success mx-1" href="/bookings/{{$booking->id}}/edit">Edit</a>
                                        <button type="submit" title="delete" class="btn btn-danger mx-1">Delete</button>
                                    @endauth
                                </form>--}}

                                <form action="/bookings/{{$booking->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-outline-primary mx-1 " href="/bookings/{{$booking->id}}">Show</a>
                                        <a class="btn btn-outline-success mx-1"
                                           href="/bookings/{{$booking->id}}/edit">Edit</a>
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
