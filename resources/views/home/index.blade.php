@extends('layouts.app')
@section('content')

    @if (Auth::check())
        </div>
</div>
        @endif
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner" alt="First Aid Course Image">
        <div class="container">
            <div class="caption">
                <h3>Mobile Health and Safety</h3>
                <hr>
                <p>The premier <strong>locally owned and operated</strong> provider of Workplace Health and
                    Safety Services in the Queenstown Lakes and Central Otago region.
                </p>
                <p>
                    <strong>Providing First Aid courses now.</strong>
                    <br>Attend a course with us to get your First Aid qualifications.
                </p>
                <div class="btn-book-primary">
                    <a href="/book">Book your First Aid Course now!</a>
                </div>
            </div>
        </div>
    </div>

    <div id="notification">
        <span>We can run courses at your workplace to meet your needs. Please call us for more information.</span>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="course-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>First Aid Courses Available</h2>
                        <hr>
                    </div>
                </div>


                <div class="row ">
                    @foreach($courses as $course)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">

                            <div class="card card-body card-body-align">
                                <img src="/storage/images/FA6.jpg"
                                     alt="picture of course being held">
                                <h3>{{$course->course_name}}</h3>
                                <p>{{$course->course_desc_short}}</p>
                                <h5>{{$course->duration}} &nbsp &nbsp &nbsp &nbsp ${{$course->price}}</h5>
                                <span>
                                <div class="btn-readmore">
                                        <a href="/courses/1">Read more</a>
                            </div>
                                <div class="btn-book-secondary">
                                        <a href="/bookings/create">Book</a>
                            </div>
                            </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{--Reviews start here--}}

            <div class="row">
                <div class="col-md-12 ">
                    <div class="section-heading">
                        <h4>
                            We are trusted by many companies in the Queenstown Lakes and Central Otago region,
                            including:
                        </h4>
                        <hr>
                    </div>
                    <div class="referencelogo">
                        <img src="/images/skyline-queenstown-logo.png" alt="Skyline Queenstown Logo">
                        <img src="/images/site-queenstown.jpg" alt="Site Trampaline Logo">
                        <img src="/images/mitre10.svg" alt="Mitre 10 Logo">
                        <img src="/images/rps-logo.jpg" alt="Remarkables Primary School Logo">
                        <img src="/images/neatmeatlogo.jpeg" alt="Neat Meat Queenstown Logo">
                        <img src="/images/bluekanulogo.jpg" alt="Blue Kanu Queenstown Logo">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 ">
                    <div class="section-heading">
                        <h4>
                            What our learners like most about the courses:
                        </h4>
                        <hr>
                    </div>

                    <blockquote>
                        <p>CPR, burns, choking, heart attack. Enjoyed all the training.</p>
                        <p id="referee">Nathanial</p>
                    </blockquote>
                    <blockquote>
                        <p>How interactive and easy going it was.</p>
                        <p id="referee">Karli</p>
                    </blockquote>
                    <blockquote>
                        <p>The delivery and content was very relevant to me.</p>
                        <p id="referee">Amber</p>
                    </blockquote>
                    <blockquote>
                        <p>Examples were fun.</p>
                        <p id="referee">Angela</p>
                    </blockquote>
                    <blockquote>
                        <p>I enjoyed the course today. I learned a lot. Actually to do CPR.</p>
                        <p id="referee">Ervin</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    {{--Reviews end here--}}

@endsection




{{--                OLD DISPLAY FOR CARDS
<div class="container-fluid mt-4">
                    <div class="row text-left">
                        @foreach($courses as $course)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <h3>{{$course->courseName}}</h3>
                                <h5>${{$course->price}}</h5>
                                <img src="images/course_02.jpg" alt="Course 1" height="100" width="100">
                                <br>
                                <p>{{$course->courseDescription}}</p>
                                <div class="secondary-button">
                                    <a href="/book">Book course</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>--}}
