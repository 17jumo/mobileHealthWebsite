@extends('layouts.app')
@section('content')

    bookings.create

    <div class="about-page">
        <div class="container">
            <div class="row col-md-12 section-heading">
                <h2>Course Booking form</h2>
                <hr>
            </div>
            {{--<div class="row form-body form-holder form-content form-items">--}}

            <form method="POST" action="/bookings/index">
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
                            <label for="firstname">First Name *</label>
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                   name="firstname" id="firstname" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastname">Last Name *</label>
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror"
                                   id="lastname" name="lastname" value="" required>
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
                            <label for="phone">Mobile Phone*</label>
                            <input class="form-control" type="text" name="phone" >
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
                                    onchange="showfield(this.options[this.selectedIndex].value)"
                                    required>
                                <option value="Male">Male</option>
                                <option value="female">Female</option>
{{--                                <option value="Other">Or please specify</option>--}}
                            </select>
                        </div>
{{--                        <div class="col-md-6">
                            <div id="div1"></div>
                        </div>--}}

                        <div class="col-md-6">
                            <label for="companyName">Company Name *</label>
                            <input type="text" class="form-control @error('companyName') is-invalid @enderror"
                                   name="companyName" id="companyName" required>
                        </div>

                        <div class="col-md-6">
                            <label for="addressStreet">Street Address *</label>
                            <input type="text" class="form-control @error('addressStreet') is-invalid @enderror"
                                   name="addressStreet" id="addressStreet" required>
                        </div>

                        <div class="col-md-6">
                            <label for="addressSuburb">Suburb *</label>
                            <input type="text" class="form-control @error('addressSuburb') is-invalid @enderror"
                                   name="addressSuburb" id="addressSuburb" required>
                        </div>

                        <div class="col-md-6">
                            <label for="addressCity">Street Address *</label>
                            <input type="text" class="form-control @error('addressCity') is-invalid @enderror"
                                   name="addressCity" id="addressCity" required>
                        </div>

                        <div class="col-md-6">
                            <label for="addressPostcode">Postcode *</label>
                            <input type="text" class="form-control @error('addressPostcode') is-invalid @enderror"
                                   name="addressPostcode" id="addressPostcode" required>
                        </div>

                        <div class="col-md-6">
                            <label for="addressCountry">Country *</label>
                            <input type="text" class="form-control @error('addressCountry') is-invalid @enderror"
                                   name="addressCountry" id="addressCountry" required>
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
    </div>



@endsection



