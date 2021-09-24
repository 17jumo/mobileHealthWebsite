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
                    <h2>Show the booking</h2>
                    <hr>
                </div>

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
                            <th scope="row">{{$booking->id}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Firstname</th>
                            <th scope="row">{{$booking->first_name}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Lastname</th>
                            <td scope="row">{{$booking->last_name}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Email</th>
                            <td scope="row">{{$booking->email}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Date of birth</th>
                            <td scope="row">{{$booking->dob}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Gender</th>
                            <td scope="row">{{$booking->gender}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Phone number</th>
                            <td scope="row">{{$booking->phone}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Company Name</th>
                            <td scope="row">{{$booking->company_name}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Street</th>
                            <td scope="row">{{$booking->add_street}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Suburb</th>
                            <td scope="row">{{$booking->add_suburb}}</td>
                        </tr>
                        <tr>
                            <th scope="col">City</th>
                            <td scope="row">{{$booking->add_city}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Postcode</th>
                            <td scope="row">{{$booking->add_postcode}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Country</th>
                            <td scope="row">{{$booking->add_country}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Course Booked</th>
                            <td scope="row">Not implemented</td>
                        </tr>
                        <tr>
                            <th scope="col">Course Date</th>
                            <td scope="row">Not implemented</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                @auth
                    <a class="btn btn-primary" href="/bookings/{{$booking->id}}/edit">Edit Booking</a>
                @endauth
                <a class="btn btn-warning mx-1" href="/bookings/">View Booking List</a>
            </div>
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
