@extends('layouts.app')
@section('content')

    create test coursedates

    <div class="container">

        <a class="btn btn-primary mx-1" href="/">View Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates">View Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/bookings">View Bookings</a>

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Coursedates</h2>
                    <hr>
                </div>


                <div class="container">

                    <form method="POST" action="/coursedates">
                        @csrf
                        <div class="checkout-form">
                            <h4>Add New Dates</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="scheduled_date">Scheduled Date</label>
                                    <input type="date" class="form-control @error('scheduled_date') is-invalid @enderror"
                                           id="scheduled_date" name="scheduled_date" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="max_attendee">Maximum Attendees</label>
                                    <input type="text" class="form-control @error('max_attendee') is-invalid @enderror"
                                           id="max_attendee" name="max_attendee" value="" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="venue">Venue</label>
                                    <input type="text" class="form-control @error('venue') is-invalid @enderror"
                                           id="venue" name="venue" value="18 Glenda Drive, Frankton, Queenstown" required>
                                </div>

                                <div class="form-button mt-3">
                                    <input class="btn btn-primary" type="submit" value="Submit Booking">
                                    <a class="btn btn-warning" href="/coursedates/index">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



@endsection


