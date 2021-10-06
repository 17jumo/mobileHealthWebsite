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
            <h4>Mobile Health and Safety</h4>
            <hr>
            <p>The premier <strong>locally owned and operated</strong> provider of Workplace Health and
                Safety Services in the Queenstown Lakes and Central Otago region.
            </p>
            <p>
                <strong>Providing First Aid courses now.</strong>
                <br>Attend a course with us to get your First Aid qualifications.
            </p>
            <div class="btn-book-primary">
                <a href="/bookings/create">Book your First Aid Course now!</a>
            </div>
        </div>
    </div>
</div>

<div id="notification">
    <p>We can run courses at your workplace to meet your needs. Please call us for more information.</p>
</div>
<!-- Banner Ends Here -->

<!-- Featured Starts Here -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>First Aid Courses Available</h2>
                <hr>
            </div>
        </div>


        <div class="row">
            @foreach($courses as $course)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">

                    <div class="card card-body card-index">
                        <img src="/images/index/heart.png"
                             alt="picture of course being held">
                        <h5>{{$course->course_name}}</h5>
                        <h6>Duration: {{$course->duration}}
                            @if($course->duration > 1)
                                days
                            @else
                                day
                            @endif
                        </h6>
                        <h6>Cost: ${{$course->price}} inc GST</h6>
                        <p>{{$course->course_desc_short}}</p>
                        <p><a href="/courses/{{$course->id}}"><p id="readmore">Read more</p></a></p>

                        <button href="/bookings/create" class="btn btn-info">Book now</button>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{--Reviews start here--}}

    {{--    <div class="row">--}}

    <div class="row">
        <div class="col-md-12">

            <div class="section-heading">
                <h4>
                    We are trusted by many companies in the Queenstown Lakes and Central Otago region,
                    including:
                </h4>
                <hr>
            </div>
            <div id="referencelogo">
                <img src="/images/index/skyline-queenstown-logo.png" alt="Skyline Queenstown Logo">
                <img src="/images/index/site-queenstown.jpg" alt="Site Trampaline Logo">
                <img src="/images/index/mitre10.svg" alt="Mitre 10 Logo">
                <img src="/images/index/rpslogo.jpg" alt="Remarkables Primary School Logo">
                <img src="/images/index/neatmeatlogo.jpeg" alt="Neat Meat Queenstown Logo">
                <img src="/images/index/bluekanu_logo.jpg" alt="Blue Kanu Queenstown Logo">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h4>
                    What our learners like most about the courses:
                </h4>
                <hr>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div id="references">

                    <p>CPR, burns, choking, heart attack. Enjoyed all the training.</p>
                    <p class="referee">- Nathanial</p>

                    <p>How interactive and easy going it was.</p>
                    <p class="referee">- Karli</p>

                    <p>The delivery and content was very relevant to me.</p>
                    <p class="referee">- Amber</p>

                    <p>Examples were fun.</p>
                    <p class="referee">- Angela</p>

                    <p>I enjoyed the course today. I learned a lot. Actually to do CPR.</p>
                    <p class="referee">- Ervin</p>

            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <img src="/images/index/studentslearning.jpg" alt="Students learning at the First Aid course"
                 class="course-image image-greyscale">
        </div>
    </div>

{{--Reviews end here--}}

@endsection
