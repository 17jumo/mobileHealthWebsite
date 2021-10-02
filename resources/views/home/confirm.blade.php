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
                <p>You have booked for:</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <p>Name</p>
            </div>
            <div class="col-md-8 col-sm-12">
                <p>xxxxxxxxxxxxxx</p>
            </div>
        </div>
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
