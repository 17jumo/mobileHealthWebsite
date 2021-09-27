@extends('layouts.app')
@section('content')

    @if (Auth::check())
    @else
        <div class="container">
            @endif

            <div class="row col-md-12 section-heading">
                <h2>Create booking</h2>
                <hr>
            </div>

            <div class="row col-md-12">
                <p>Please complete the form below and make a payment to secure your place on a course.</p>
            </div>

            <form method="POST" action="/bookings">
                @csrf
                <div class="row">
                    <h4>Course Details</h4>

                    <div class="col-md-12">
                        <label for="course_name">Course</label>
                        <select id="course_name" name="course_name" class="form-control"
                                @error('course_total') is-invalid @enderror required>
                            <option value="FirstAid">First Aid Course</option>
                            <option value="FirstAidRefresh">First Aid Refresher</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label for="course_date" class="form-control-label">Select course
                            date*</label>
                        <select name="course_date" id="course_date"
                                class="form-control @error('course_total') is-invalid @enderror"
                                required>
                            <option value="2022-02-05">Thursday 05 Feb 2022</option>
                            <option value="2022-02-17">Thursday 17 Feb 2022</option>
                        </select>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <label for="course_total">Course Price</label>
                        <input type="number" class="form-control @error('course_total') is-invalid @enderror"
                               name="course_total" id="course_total" value="" required>
                    </div>

                    <div class="row">
                        <h4>Attendee Details</h4>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="first_name">First Name *</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                   name="first_name" id="first_name" value="" required>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="last_name">Last Name *</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                   id="last_name" name="last_name" value="" required>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="email">Email*</label>
                            <input type="text" id="email" name="email" class="form-control"
                                   required/>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="phone">Phone number (mobile preferred)*</label>
                            <input class="form-control" type="text" name="phone">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="actName" class="form-control-label">Date of birth*</label>
                            <input class="form-control"
                                   type="date" id="dob" name="dob"
                                   min="1920-01-01" max="2021-01-01"
                                   pattern="\d{4}-\d{2}-\d{2}"
                                   required>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="gender" class="form-control-label">Gender*</label>
                            <select name="gender" id="gender" class="form-control"
                                    required>
                                <option value="Male">Male</option>
                                <option value="female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="form-control @error('company_name') is-invalid @enderror"
                                   name="company_name" id="company_name">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="add_street">Street*</label>
                            <input type="text" class="form-control @error('add_street') is-invalid @enderror"
                                   name="add_street" id="add_street" required>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="add_suburb">Suburb*</label>
                            <input type="text" class="form-control @error('add_suburb') is-invalid @enderror"
                                   name="add_suburb" id="add_suburb" required>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="add_city">City*</label>
                            <input type="text" class="form-control @error('add_city') is-invalid @enderror"
                                   name="add_city" id="add_city" required>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                            <label for="add_postcode">Postcode*</label>
                            <input type="text" class="form-control @error('add_postcode') is-invalid @enderror"
                                   name="add_postcode" id="add_postcode" required>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="add_country">Country*</label>
                            <input type="text" class="form-control @error('add_country') is-invalid @enderror"
                                   name="add_country" id="add_country" required>
                        </div>

                        {{--                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                    <input type="checkbox" id="terms" name="terms" value="">
                                                    <label for="terms">&nbspI have read and agree to the <a href="/home/terms" id="terms"
                                                                                                            target="_blank">terms and
                                                            conditions</a></label><br>
                                                </div>--}}

                        <div class="form-button mt-3">
                            @if (Auth::check())
                                <input class="btn btn-primary" type="submit" value="Submit Booking">
                                <a class="btn btn-outline-dark" href="/bookings">Cancel</a>
                            @else
                                <a class="btn btn-info" href="/bookings/create">Proceed to payment</a>
                                <a class="btn btn-outline-dark" href="/">Cancel</a>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>

@endsection





