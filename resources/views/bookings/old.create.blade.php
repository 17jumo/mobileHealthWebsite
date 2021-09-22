{{--@extends('layouts.app')
@section('content')

    create test bookings

@endsection--}}



{{--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>

<script type="text/javascript">
    $("document").ready(function () {
        $("#contactForm").validate({
            rules: {
                firstname: {
                    required: true,
                    minlength: 2
                },
                lastname: {
                    required: true,
                    minlength: 2
                },
                mobile: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                firstname: {
                    required: "Please enter your first name",
                    minlength: "Your name must contain 2 characters"
                },
                lastname: {
                    required: "Please enter your last name",
                    minlength: "Your name must contain 2 characters"
                },
                email: {
                    required: "Please enter a valid email address"
                }
            }
        });
    });
</script>--}}

@extends('layouts.app')
@section('content')
    {{--

        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Create Activity</h3>
                            <p>Add your activity data</p>
                            --}}
    {{--<form class="requires-validation" novalidate>--}}{{--


                            <form method="POST" action="/courses">
                                @csrf

                                <div class="col-md-12">
                                    <label for="actName">Activity Name</label>
                                    <input class="form-control" type="text" name="actName" placeholder="Activity Name"
                                           required>
                                </div>

                                <div class="col-md-12">
                                    <label for="distance">Distance</label>
                                    <input class="form-control" type="number" name="distance" placeholder="Distance (km)"
                                           required>
                                </div>



                                <div class="col-md-12">
                                    <label for="sport">Sport</label>
                                    <select id="sport" name="sport" class="form-control" required>
                                        <option value="run">Run</option>
                                        <option value="bike">Bike</option>
                                        <option value="ski">Ski</option>
                                        <option value="snowboard">Snowboard</option>
                                        <option value="kayak">Kayak</option>
                                    </select>
                                </div>


                                <div class="col-md-12">
                                    <label for="actName">Description</label>
                                    <textarea class="form-control" name="description" required rows="3"></textarea>
                                </div>

                                <div class="form-button mt-3">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                    <a class="btn btn-warning" href="/courses/">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    --}}


    <div class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Course Booking form</h2>
                        <hr>
                    </div>
                    test

                    <div class="right-content">


                        <div class="form-body">
                            <div class="row">
                                <div class="form-holder">
                                    <div class="form-content">
                                        <div class="form-items">
                                            <form method="POST" action="/books">
                                                @csrf



                                                {{--                                                <div class="col-md-4">
                                                                                                    <label for="course">Course</label>
                                                                                                    <select id="course" name="course" class="form-control" required>
                                                                                                        <option value="FirstAid">First Aid Course</option>
                                                                                                        <option value="FirstAidRefresh">First Aid Refresher</option>
                                                                                                        <option value="ManageEmergency">Managing Emergency Situations
                                                                                                        </option>
                                                                                                        <option value="ProvideLife">Provide Life Support</option>
                                                                                                    </select>
                                                                                                </div>--}}

                                                {{--                                                <div class="col-md-4">
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



                                                {{--                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                                                                                        <h3>{{$course->courseName}}</h3>
                                                                                                        <h5>${{$course->price}}</h5>
                                                                                                        <img src="images/course_02.jpg" alt="Course 1" height="100" width="100">
                                                                                                        <br>
                                                                                                        <p>{{$course->courseDescription}}</p>
                                                                                                        <div class="secondary-button">
                                                                                                            <a href="/book">Book course</a>
                                                                                                        </div>
                                                                                                    </div>--}}



                                                {{--                                                <div class="col-md-12">
                                                                                                    <label for="sport">Sport</label>
                                                                                                    <select id="sport" name="sport" class="form-control" required>
                                                                                                        @foreach($coursedates as $coursedate)
                                                                                                        <option value={[$coursedate->courseName}}>Run</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                    --}}{{--                                <div class="valid-feedback">You selected a sport!</div>--}}{{--
                                                                                                    --}}{{--                                <div class="invalid-feedback">Please select a sport!</div>--}}{{--
                                                                                                </div>--}}



                                                <br><br><br>

                                                <div class="row">
                                                    <div class="col">
                                                        <label for="firstname">First Name *</label>
                                                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" placeholder="First name"
                                                               aria-label="firstname" name="firstname" id="firstname" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="lastname">Last Name *</label>
                                                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="" required>
                                                        {{--                                                        <input type="text" class="form-control" placeholder="Last name"
                                                                                                                       aria-label="lastname" name="lastname" id="lastname">--}}
                                                    </div>
                                                    <div>
                                                        <label for="email">Email*</label>
                                                        <input type="text" id="email" name="email"  class="form-control" placeholder="Email" required/>
                                                        {{--<input type="text" id="email" name="email" value="<?php echo($email); ?>" class="form-control" placeholder="Email" required/>
                                                            <span class="validationtext" style="color:darkorange;font-size:0.8em;"><?php print($errEmail); ?></span>
                                                            <br />--}}
                                                    </div>

                                                    {{--
                                                                                                    <div class="col-md-4">
                                                                                                        <label for="phone">Mobile Phone</label>
                                                                                                        <input class="form-control" type="text" name="phone"
                                                                                                               placeholder="Phone">
                                                                                                    </div>
                                                                                                   --}}{{-- <div class="col-md-12">
                                                                                                        <label for="email">Email*</label>
                                                                                                        <input class="form-control" type="email" name="email"
                                                                                                               placeholder="Email" required>
                                                                                                    </div>--}}{{--



                                                                                                    <div class="col-md-12">
                                                                                                        <label for="actName" class="form-control-label">Date of
                                                                                                            birth</label>
                                                                                                        <input class="form-control"
                                                                                                               type="date" id="dob" name="dob"
                                                                                                               value="2018-07-22"
                                                                                                               min="1920-01-01" max="2021-01-01"
                                                                                                               required pattern="\d{4}-\d{2}-\d{2}"
                                                                                                               required>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col">
                                                                                                            <label for="gender" class="form-control-label">Gender</label>
                                                                                                            <select name="gender" id="gender" class="form-control"
                                                                                                                    onchange="showfield(this.options[this.selectedIndex].value)"
                                                                                                                    required>
                                                                                                                <option value="Male">Male</option>
                                                                                                                <option value="female">Female</option>
                                                                                                                <option value="Other">Or please specify</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        <div class="col">
                                                                                                            <div id="div1"></div>
                                                                                                        </div>
                                                                                                    </div>--}}

                                                    <div class="form-button mt-3">
                                                        <input class="btn btn-primary" type="submit" value="Submit Booking">
                                                        <a class="btn btn-warning" href="/courses/">Cancel</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



