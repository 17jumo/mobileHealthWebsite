@extends('layouts.app')
@section('content')

    <div class="container">

        <a class="btn btn-primary mx-1" href="/courses/show">View and Amend Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates/show">View and Amend Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/books/show">View and Amend Booking</a>

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
                                <a class="btn btn-primary" href="/books/{{$book->id}}/edit">Edit Booking</a>
                            </div>
                        @endauth

                        <h3>{{$book->firstname}}</h3>
                        <p>{{$book->lastname}}</p>


                        @method('PUT')
                        @csrf

                        <div id="activityContainer">

                            <h3>{{$book->firstname}} {{$book->lastname}}</h3>
                            <p>Email {{$book->email}}, DOB {{$book->dob}}, Gender {{$book->gender}} Mobile: {{$book->mobile}}
                                CompName: {{$book->companyName}} Street: {{$book->addressStreet}}
                                Suburb: {{$book->addressSuburb}} City: {{$book->addressCity}} PostCode: {{$book->addressPostcode}}
                                Country: {{$book->addressCountry}}
                                CourseDate: {{$book->courseDate}}</p>

                            <div>
                                <p>Distance</p>
                                <h2>{{$book->email}}</h2>
                            </div>
                            <div>
                                <p>Total Minutes</p>
                                <h2>{{$book->dob}}</h2>
                            </div>
                            <div>
                                <p>Date</p>
                                <h2>{{$book->gender}}</h2>
                            </div>
                            <div>
                                <p>Sport</p>
                                <h2>{{$book->mobile}}</h2>
                            </div>
                        </div>




                        <br>
                        <a class="btn btn-warning mx-1" href="/books/">Cancel</a>
                        <br><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
