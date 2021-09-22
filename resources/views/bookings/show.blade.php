{{--@extends('layouts.app')
@section('content')

    @foreach($bookings as $booking)

        <h3>{{$booking->firstname}} {{$booking->lastname}}</h3>
        <p>Email {{$booking->email}}, DOB {{$booking->dob}}, Gender {{$booking->gender}} Mobile: {{$booking->mobile}}
            CompName: {{$booking->companyName}} Street: {{$booking->addressStreet}}
            Suburb: {{$booking->addressSuburb}} City: {{$booking->addressCity}} PostCode: {{$booking->addressPostcode}}
            Country: {{$booking->addressCountry}}
            CourseDate: {{$booking->courseDate}}</p>
        <hr>
    @endforeach


@endsection--}}

@extends('layouts.app')
@section('content')

    bookings.show
{{--
    @foreach($bookings as $booking)

        <h3>{{$booking->firstname}} {{$booking->lastname}}</h3>
        <p>Email {{$booking->email}}, DOB {{$booking->dob}}, Gender {{$booking->gender}} Mobile: {{$booking->mobile}}
            CompName: {{$booking->companyName}} Street: {{$booking->addressStreet}}
            Suburb: {{$booking->addressSuburb}} City: {{$booking->addressCity}} PostCode: {{$booking->addressPostcode}}
            Country: {{$booking->addressCountry}}
            CourseDate: {{$booking->courseDate}}</p>
        <hr>
    @endforeach--}}


    <div class="container">

        <a class="btn btn-primary mx-1" href="/courses/show">View and Amend Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates/show">View and Amend Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/bookings/show">View and Amend Booking</a>


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
                    <tr>
                        <td>test</td>
                        <td>xxx</td>
                        <td>yyy</td>
                    </tr>
                    {{--@foreach($bookings as $b)
                        <tr>
                            <th scope="row">{{$booking->id}}</th>
                            <td>{{$booking->firstname}} </td>
                            <td>{{$booking->lastname}}</td>
--}}{{--                            <td>{{$booking->email}}</td>
                            <td>{{$booking->dob}}</td>
                            <td>{{$booking->gender}}</td>
                            <td>{{$booking->mobile}}</td>
                            <td>{{$booking->companyName}}</td>
                            <td>{{$booking->addressStreet}}</td>
                            <td>{{$booking->addressSuburb}}</td>
                            <td>{{$booking->addressCity}}</td>
                            <td>{{$booking->addressPostcode}}</td>
                            <td>{{$booking->addressCountry}}</td>--}}{{--
                            --}}{{--<td>
                                <form action="/bookings/{{$bookings->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-primary mx-1"
                                           href="/bookings/{{$bookings->id}}">Show More</a>
                                        <a class="btn btn-success mx-1" href="/bookings/{{$bookings->id}}/edit">Edit</a>
                                        <button type="submit" title="delete" class="btn btn-danger mx-1">Delete</button>
                                    @endauth
                                </form>
                            </td>--}}{{--
                        </tr>
                    @endforeach--}}
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
{{--


@extends('layouts.app')
@section('content')

    <div class="container">

        <a class="btn btn-primary mx-1" href="/courses/show">View and Amend Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates/show">View and Amend Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/bookings/show">View and Amend Booking</a>

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>booking - SHOW</h2>
                    <hr>
                </div>


    <div id="showView" class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">

                        @auth
                            <div class="buttonContainer">
                                <a class="btn btn-primary" href="/bookings/{{$booking->id}}/edit">Edit Booking</a>
                            </div>
                        @endauth

                        <h3>{{$booking->firstname}}</h3>
                        <p>{{$booking->lastname}}</p>


                        @method('PUT')
                        @csrf

                        <div id="activityContainer">

                            <h3>{{$booking->firstname}} {{$booking->lastname}}</h3>
                            <p>Email {{$booking->email}}, DOB {{$booking->dob}}, Gender {{$booking->gender}} Mobile: {{$booking->mobile}}
                                CompName: {{$booking->companyName}} Street: {{$booking->addressStreet}}
                                Suburb: {{$booking->addressSuburb}} City: {{$booking->addressCity}} PostCode: {{$booking->addressPostcode}}
                                Country: {{$booking->addressCountry}}
                                CourseDate: {{$booking->courseDate}}</p>

                            <div>
                                <p>Distance</p>
                                <h2>{{$booking->email}}</h2>
                            </div>
                            <div>
                                <p>Total Minutes</p>
                                <h2>{{$booking->dob}}</h2>
                            </div>
                            <div>
                                <p>Date</p>
                                <h2>{{$booking->gender}}</h2>
                            </div>
                            <div>
                                <p>Sport</p>
                                <h2>{{$booking->mobile}}</h2>
                            </div>
                        </div>




                        <br>
                        <a class="btn btn-warning mx-1" href="/bookings/">Cancel</a>
                        <br><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection--}}
