@extends('layouts.app')
@section('content')

@if (Auth::check())
</div>
</div>
@endif

<!-- Page Content -->
<!-- Banner Starts Here -->

<!-- Featured Starts Here -->
<div class="container">
    <div class="section-heading">
        <h4>Thank you for booking with Mobile Health.</h4>
        <div class="row">
            <div class="col-md-12">
                <p>Course Booked: {{$booking->coursedate->course->course_name}}</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <p>Name: {{$booking->first_name}} {{$booking->last_name}}</p>
            </div>
            <div class="col-md-8 col-sm-12">
                <p>Email: {{$booking->email}}</p>
            </div>
            <div class="col-md-8 col-sm-12">
                <p>Phone: {{$booking->phone}}</p>
            </div>
            <div class="col-md-8 col-sm-12">
                <p>Date Of Birth: {{$booking->dob}}</p>
            </div>
            <div class="col-md-8 col-sm-12">
                <p>xxxxxxxxxxxxxx</p>
            </div>
        </div>


        <td>{{$booking->first_name}} </td>
        <td>{{$booking->last_name}}</td>
        <td>{{$booking->email}}</td>
        <td>{{$booking->phone}}</td>
        <td>{{$booking->company_name}}</td>
        <td>{{$booking->course_name}} </td>

        <div class="row">
            <div class="col-md-4 col-sm-12">
                <p>Course</p>
            </div>
            <div class="col-md-8 col-sm-12">
                <p>xxxxxxxxxxxxxx</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <p>Date and Start Time</p>
            </div>
            <div class="col-md-8 col-sm-12">
                <p>xxxxxxxxxxxxxx, xxxxx am</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <p>Location</p>
            </div>
            <div class="col-md-8 col-sm-12">
                <p>xxxxxxxxxxxxxx</p>
            </div>
        </div>


        <p>You will receive an email confirmation of your booking and payment shortly.</p>

        <p>If you have any questions, please feel free to contact us.</p>

        <p><a href="/home/terms" id="is_terms_agreed" target="_blank">Please review our Terms and Conditions for
                information about the course.</a></p>
    </div>
</div>


@endsection
