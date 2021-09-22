@extends('layouts.app')
@section('content')

    <div class="container">

        <a class="btn btn-primary mx-1" href="/courses/index">View Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates/index">View Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/books/index">View Bookings</a>


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
{{--                        <th scope="col">Company Name</th>
                        <th scope="col">Street</th>
                        <th scope="col">Suburb</th>
                        <th scope="col">City</th>
                        <th scope="col">Postcode</th>
                        <th scope="col">Country</th>--}}
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
{{--                            <td>{{$book->companyName}}</td>
                            <td>{{$book->addressStreet}}</td>
                            <td>{{$book->addressSuburb}}</td>
                            <td>{{$book->addressCity}}</td>
                            <td>{{$book->addressPostcode}}</td>
                            <td>{{$book->addressCountry}}</td>--}}
                            <td>
                                {{--<form action="/books/{{$books->firstname}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-primary mx-1"
                                           href="/books/{{$books->firstname}}">Show More</a>
                                        <a class="btn btn-success mx-1" href="/books/{{$books->firstname}}/edit">Edit</a>
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
