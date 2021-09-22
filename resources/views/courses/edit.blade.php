@extends('layouts.app')
@section('content')

    <div class="container">

        <a class="btn btn-primary mx-1" href="/">View Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates/index">View Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/bookings/index">View Bookings</a>

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Edit a course</h2>
                    <hr>
                </div>


                <div class="form-content">
                    <form method="POST" action="/courses/{{$courses->id}}">
                        @method('PUT')
                        @csrf

                        <div class="row">

                            <div class="form-group col-12">
                                <label for="courseName">Course Name</label>
                                <input type="text" class="form-control @error('courseName') is-invalid @enderror" id="courseName" name="courseName" value="{{$courses->course_name}}">
                            </div>

                            <div class="form-group col-12">
                                <label for="courseDescShort">Course Short Description</label>
                                <input type="textarea" class="form-control @error('courseDescShort') is-invalid @enderror" id="courseDescShort" name="courseDescShort" value="{{$courses->course_desc_short}}">
                            </div>

                            <div class="form-group col-12">
                                <label for="courseDescLong">Course Long Description</label>
                                <input type="textarea" class="form-control @error('courseDescLong') is-invalid @enderror" id="courseDescLong" name="courseDescLong" value="{{$courses->course_desc_long}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="startTime">Start Time</label>
                                <input type="text" class="form-control @error('startTime') is-invalid @enderror" id="startTime" name="startTime" value="{{$courses->start_time}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="endTime">End Time</label>
                                <input type="text" class="form-control @error('endTime') is-invalid @enderror" id="endTime" name="endTime" value="{{$courses->end_time}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="price">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{$courses->price}}">
                            </div>

                        </div>

                        <input class="btn btn-primary" type="submit" value="Submit">
                        <a class="btn btn-warning mx-1" href="/">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
