@extends('layouts.app')
@section('content')

    <div class="container">

        <a class="btn btn-primary mx-1" href="/courses/show">View and Amend Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates/show">View and Amend Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/books/show">View and Amend Booking</a>

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Courses - EDIT</h2>
                    <hr>
                </div>


                <div class="form-content">
                    <form method="POST" action="/courses/{{$course->id}}">
                        @method('PUT')
                        @csrf

                        <div class="row">

                            <div class="form-group col-6">
                                <label for="courseName">Course Name</label>
                                <input type="text" class="form-control @error('courseName') is-invalid @enderror" id="courseName" name="courseName" value="{{$course->courseName}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="courseDescShort">Course Short Description</label>
                                <input type="text" class="form-control @error('courseDescShort') is-invalid @enderror" id="courseDescShort" name="courseDescShort" value="{{$course->courseDescShort}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="courseDescLong">Course Long Description</label>
                                <input type="text" class="form-control @error('courseDescLong') is-invalid @enderror" id="courseDescLong" name="courseDescLong" value="{{$course->courseDescLong}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="startTime">Start Time</label>
                                <input type="text" class="form-control @error('startTime') is-invalid @enderror" id="startTime" name="startTime" value="{{$course->startTime}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="startTime">Start Time</label>
                                <input type="text" class="form-control @error('startTime') is-invalid @enderror" id="startTime" name="startTime" value="{{$course->startTime}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="endTime">End Time</label>
                                <input type="text" class="form-control @error('endTime') is-invalid @enderror" id="endTime" name="endTime" value="{{$course->endTime}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="price">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{$course->price}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="location">Location</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{$course->location}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="spacesAvailable">Spaces Available</label>
                                <input type="number" class="form-control @error('spacesAvailable') is-invalid @enderror" id="spacesAvailable" name="spacesAvailable" value="{{$course->spacesAvailable}}">
                            </div>
                        </div>

                        <input class="btn btn-primary" type="submit" value="Submit">
                        <a class="btn btn-warning mx-1" href="/course/index">Cancel</a>
                    </form>
                </div>

@endsection
