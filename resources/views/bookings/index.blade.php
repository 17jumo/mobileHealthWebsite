@extends('layouts.app')
@section('content')

    bookings index

    <div class="container">

        <a class="btn btn-primary mx-1" href="/">View Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates/index">View Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/bookings/index">View Bookings</a>


        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>View Bookings</h2>
                    <hr>
                </div>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Street</th>
                        <th scope="col">Suburb</th>
                        <th scope="col">City</th>
                        <th scope="col">Postcode</th>
                        <th scope="col">Country</th>
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
                            <td>{{$booking->mobile}}</td>
                            <td>{{$booking->company_name}}</td>
                            <td>{{$booking->add_street}}</td>
                            <td>{{$booking->add_suburb}}</td>
                            <td>{{$booking->add_city}}</td>
                            <td>{{$booking->add_postcode}}</td>
                            <td>{{$booking->add_country}}</td>
                            <td>
                                {{--<form action="/bookings/{{$bookings->firstname}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-primary mx-1"
                                           href="/bookings/{{$bookings->firstname}}">Show More</a>
                                        <a class="btn btn-success mx-1" href="/bookings/{{$bookings->firstname}}/edit">Edit</a>
                                        <button type="submit" title="delete" class="btn btn-danger mx-1">Delete</button>
                                    @endauth
                                </form>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
