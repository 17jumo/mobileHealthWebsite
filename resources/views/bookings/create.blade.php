@extends('layouts.app')
@section('content')

    bookings.create
    <div class="container">

        <a class="btn btn-primary mx-1" href="/">View Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates">View Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/bookings">View Bookings</a>

        <div class="about-page">
            <div class="row col-md-12 section-heading">
                <h2>Course Booking form</h2>
                <hr>
            </div>
            {{--<div class="row form-body form-holder form-content form-items">--}}

            <form method="POST" action="/bookings">
                @csrf
                <div class="checkout-form">
                    <h4>Course Details</h4>

                    <h6>First Aid Course</h6>
                    <h6>29 December 2021</h6>
                    {{--
                                        <div class="col-md-12">
                                            <label for="course">Course</label>
                                            <select id="course" name="course" class="form-control" required>
                                                <option value="FirstAid">First Aid Course</option>
                                                <option value="FirstAidRefresh">First Aid Refresher</option>
                                                <option value="ManageEmergency">Managing Emergency Situations
                                                </option>
                                                <option value="ProvideLife">Provide Life Support</option>
                                            </select>
                                        </div>--}}

                    {{--<div class="col-md-12">
                        <label for="coursedate" class="form-control-label">Select course
                            date*</label>
                        <select name="coursedate" id="coursedate" class="form-control"
                                required>
                            <option value="date1">Thursday 7 October 2021</option>
                            <option value="date1">Thursday 14 October 2021</option>
                            <option value="date1">Thursday 21 October 2021</option>
                            <option value="date1">Thursday 28 October 2021</option>
                            <option value="date1">Thursday 4 November 2021</option>
                            <option value="date1">Thursday 11 November 2021</option>
                        </select>
                    </div>--}}

                    <h4>Attendee Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="first_name">First Name *</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                   name="first_name" id="first_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name">Last Name *</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                   id="last_name" name="last_name" value="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email*</label>
                            <input type="text" id="email" name="email" class="form-control"
                                   required/>
                            {{--<input type="text" id="email" name="email" value="<?php echo($email); ?>" class="form-control" placeholder="Email" required/>
                                <span class="validationtext" style="color:darkorange;font-size:0.8em;"><?php print($errEmail); ?></span>
                                <br />--}}
                        </div>

                        <div class="col-md-6">
                            <label for="phone">Phone Number (mobile preferred)*</label>
                            <input class="form-control" type="text" name="phone">
                        </div>

                        <div class="col-md-6">
                            <label for="actName" class="form-control-label">Date of birth*</label>
                            <input class="form-control"
                                   type="date" id="dob" name="dob"
                                   min="1920-01-01" max="2021-01-01"
                                   pattern="\d{4}-\d{2}-\d{2}"
                                   required>
                        </div>
                        <div class="col-md-6">

                        </div>

                        <div class="col-md-6">
                            <label for="gender" class="form-control-label">Gender*</label>
                            <select name="gender" id="gender" class="form-control"
                                    required>
                                <option value="Male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="company_name">Company Name *</label>
                            <input type="text" class="form-control @error('company_name') is-invalid @enderror"
                                   name="company_name" id="company_name" required>
                        </div>

                        <div class="col-md-6">
                            <label for="add_street">Street Address *</label>
                            <input type="text" class="form-control @error('add_street') is-invalid @enderror"
                                   name="add_street" id="add_street" required>
                        </div>

                        <div class="col-md-6">
                            <label for="add_suburb">Suburb *</label>
                            <input type="text" class="form-control @error('add_suburb') is-invalid @enderror"
                                   name="add_suburb" id="add_suburb" required>
                        </div>

                        <div class="col-md-6">
                            <label for="add_city">City*</label>
                            <input type="text" class="form-control @error('add_city') is-invalid @enderror"
                                   name="add_city" id="add_city" required>
                        </div>

                        <div class="col-md-6">
                            <label for="add_postcode">Postcode *</label>
                            <input type="text" class="form-control @error('add_postcode') is-invalid @enderror"
                                   name="add_postcode" id="add_postcode" required>
                        </div>

                        <div class="col-md-6">
                            <label for="add_country">Country *</label>
                            <input type="text" class="form-control @error('add_country') is-invalid @enderror"
                                   name="add_country" id="add_country" required>
                        </div>


                        <div class="form-button mt-3">
                            <input class="btn btn-primary" type="submit" value="Submit Booking">
                            <a class="btn btn-warning" href="/courses/">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection



