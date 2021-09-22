@extends('layouts.app')
@section('content')

    bookings.edit

    <div class="container">

        <a class="btn btn-primary mx-1" href="/">View Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates">View Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/bookings">View Bookings</a>

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Booking - EDIT</h2>
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
@endsection
