@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Booking details</h2>
        </div>
        @if($booking->isActive == 0)
            <div class="alert alert-danger" role="alert">Inactive Record</div>
        @endif
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
                <td scope="row">{{$booking->first_name}}</td>
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
                <th scope="col">Phone Number</th>
                <td scope="row">{{$booking->phone}}</td>
            </tr>
            <tr>
                <th scope="col">Company Name</th>
                <td scope="row">{{$booking->company_name}}</td>
            </tr>
            <tr>
                <th scope="col">Street</th>
                <td scope="row">{{$booking->street}}</td>
            </tr>
            <tr>
                <th scope="col">Suburb</th>
                <td scope="row">{{$booking->suburb}}</td>
            </tr>
            <tr>
                <th scope="col">City</th>
                <td scope="row">{{$booking->city}}</td>
            </tr>
            <tr>
                <th scope="col">Postcode</th>
                <td scope="row">{{$booking->postcode}}</td>
            </tr>
            <tr>
                <th scope="col">Country</th>
                <td scope="row">{{$booking->country}}</td>
            </tr>
            <tr>
                <th scope="col">T&C Agreed</th>
                <td scope="row">
                    @if($booking->is_terms_agreed <= 0)
                        Yes
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th scope="col">Course Name</th>
                <td scope="row">{{$booking->coursedate->course->course_name}}</td>
            </tr>
            <tr>
                <th scope="col">Course Date</th>
                <td scope="row">@php echo ($booking->coursedate->scheduled_date)->format('d-m-Y') @endphp</td>
            </tr>
            <tr>
                <th scope="col">Course Total</th>
                <td scope="row">${{$booking->course_total}}</td>
            </tr>

            </tbody>
        </table>
    </div>
    @auth
        <a class="btn btn-primary" href="/bookings/{{$booking->id}}/edit">Edit</a>
    @endauth
    <a class="btn btn-warning mx-1" href="/bookings/">Cancel</a>
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
