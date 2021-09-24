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
                    <h2>Edit a course</h2>
                    <hr>
                </div>


                <div class="form-content">
                    <form method="POST" action="/courses/{{$courses->id}}">
                        @method('PUT')
                        @csrf

                        <div class="row">

                            <div class="form-group col-12">
                                <label for="course_name">Course Name</label>
                                <input type="text" class="form-control @error('course_name') is-invalid @enderror" id="course_name" name="course_name" value="{{$courses->course_name}}">
                            </div>

                            <div class="form-group col-12">
                                <label for="course_desc_short">Course Short Description</label>
                                {{--<textarea rows="4" cols="50" class="form-control @error('course_desc_short') is-invalid @enderror" id="course_desc_short" name="course_desc_short" value="{{$courses->course_desc_short}}">

                                    </textarea>--}}

                                <input type="textarea" class="form-control @error('course_desc_short') is-invalid @enderror" id="course_desc_short" name="course_desc_short" value="{{$courses->course_desc_short}}">

                            </div>

                            <div class="form-group col-12">
                                <label for="course_desc_long">Course Long Description</label>
                                <textarea rows="4" cols="50" class="form-control @error('course_desc_long') is-invalid @enderror" id="course_desc_long" name="course_desc_long">
                                    </textarea>
                                <input type="text" class="form-control @error('course_desc_long') is-invalid @enderror" id="course_desc_long" name="course_desc_long" value="{{$courses->course_desc_long}}">

                            </div>

                            <div class="form-group col-6">
                                <label for="start_time">Start Time</label>
                                <input type="text" class="form-control @error('start_time') is-invalid @enderror" id="start_time" name="start_time" value="{{$courses->start_time}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="end_time">End Time</label>
                                <input type="text" class="form-control @error('end_time') is-invalid @enderror" id="end_time" name="end_time" value="{{$courses->end_time}}">
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
