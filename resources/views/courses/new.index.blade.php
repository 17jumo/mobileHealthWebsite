<div id="pre-header">
    <span>We are running courses during Covid Alert Level 2</span>
</div>

@extends('layouts.oldapp')
@section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner" alt="First Aid Course Image">
        <div class="container">
            <div class="caption">
                <h2>Mobile Health and Safety</h2>
                <hr>
                <p>The premier <strong>locally owned and operated</strong> provider of Workplace Health and
                    Safety Services in the Queenstown Lakes and Central Otago region.
                </p>
                <p>
                    <strong>Providing First Aid courses now.</strong>
                    <br>Attend a course with us to get your First Aid qualifications.
                </p>
                <div class="primary-button">
                    <a href="/book">Book your First Aid Course now!</a>
                </div>
            </div>
        </div>
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
                {{--                <div class="container-fluid mt-4">
                                    <div class="row text-left">
                                        @foreach($courses as $courses)
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                                <h3>{{$courses->courseName}}</h3>
                                                <h5>${{$courses->price}}</h5>
                                                <img src="images/course_02.jpg" alt="Course 1" height="100" width="100">
                                                <br>
                                                <p>{{$courses->courseDescription}}</p>
                                                <div class="secondary-button">
                                                    <a href="/book">Book courses</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>--}}

                <div class="row ">
                    @foreach($courses as $c)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>{{$c->courseName}}</h3>
                                </div>
                                <img class="card-img-top" src="/storage/images/{{$c->courseImage}}"
                                     alt="picture of course being held">
                                <div class="card-body" style="height: 250px">

                                    <p>{{$c->courseDescShort}}</p>
                                    <h5 style="text-align: right; color: #0a53be">${{$c->price}}</h5>

                                    <div class="secondary-button" style="text-align: right">
                                        <span>
                                        <a href="/course/{{$c->id}}">Show Course</a>
                                        <a href="/books/create">Book course</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{--Reviews starts here--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Testimonials</h2>
                    <hr>
                    <h5>What our learners like most about the courses</h5>
                    <p>CPR, burns, choking, heart attack. Enjoyed all the training. <em>- Nathanial</em></p>
                    <p>How interactive and easy going it was. <em>- Karli</em></p>
                    <p>The delivery and content was very relevant to me. <em>- Amber</em></p>
                    <p>Examples were fun. <em>- Angela</em></p>
                    <p>I enjoyed the course today. I learned a lot. Actually to do CPR. <em>- Ervin</em></p>

                </div>
            </div>
        </div>
    </div>
    {{--Reviews end here--}}

@endsection
