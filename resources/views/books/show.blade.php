{{--@extends('layouts.app')
@section('content')

    @foreach($books as $book)

        <h3>{{$book->firstname}} {{$book->lastname}}</h3>
        <p>Email {{$book->email}}, DOB {{$book->dob}}, Gender {{$book->gender}} Mobile: {{$book->mobile}}
            CompName: {{$book->companyName}} Street: {{$book->addressStreet}}
            Suburb: {{$book->addressSuburb}} City: {{$book->addressCity}} PostCode: {{$book->addressPostcode}}
            Country: {{$book->addressCountry}}
            CourseDate: {{$book->courseDate}}</p>
        <hr>
    @endforeach


@endsection--}}

@extends('layouts.app')
@section('content')
{{--
    @foreach($books as $book)

        <h3>{{$book->firstname}} {{$book->lastname}}</h3>
        <p>Email {{$book->email}}, DOB {{$book->dob}}, Gender {{$book->gender}} Mobile: {{$book->mobile}}
            CompName: {{$book->companyName}} Street: {{$book->addressStreet}}
            Suburb: {{$book->addressSuburb}} City: {{$book->addressCity}} PostCode: {{$book->addressPostcode}}
            Country: {{$book->addressCountry}}
            CourseDate: {{$book->courseDate}}</p>
        <hr>
    @endforeach--}}


    <div class="container">

        <a class="btn btn-primary mx-1" href="/courses/show">View and Amend Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates/show">View and Amend Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/books/show">View and Amend Booking</a>


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
                    @foreach($books as $book)
                        <tr>
                            <th scope="row">{{$book->id}}</th>
                            <td>{{$book->firstname}} </td>
                            <td>{{$book->lastname}}</td>
                            <td>{{$book->email}}</td>
                            <td>{{$book->dob}}</td>
                            <td>{{$book->gender}}</td>
                            <td>{{$book->mobile}}</td>
                            <td>{{$book->companyName}}</td>
                            <td>{{$book->addressStreet}}</td>
                            <td>{{$book->addressSuburb}}</td>
                            <td>{{$book->addressCity}}</td>
                            <td>{{$book->addressPostcode}}</td>
                            <td>{{$book->addressCountry}}</td>
                            <td>
                                <form action="/books/{{$books->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-primary mx-1"
                                           href="/books/{{$books->id}}">Show More</a>
                                        <a class="btn btn-success mx-1" href="/books/{{$books->id}}/edit">Edit</a>
                                        <button type="submit" title="delete" class="btn btn-danger mx-1">Delete</button>
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
{{--


@extends('layouts.app')
@section('content')

    <div class="container">

        <a class="btn btn-primary mx-1" href="/courses/show">View and Amend Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates/show">View and Amend Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/books/show">View and Amend Booking</a>

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Book - SHOW</h2>
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
@endsection--}}
