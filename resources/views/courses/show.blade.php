@extends('layouts.app')
@section('content')

    @if (Auth::check())
    @else
        <div class="container">
            @endif


                    <div class="card wd-100">
                        <div class="card-body">
                            @method('PUT')
                            @csrf

                            <div class="row show-cards">

                                <div class="row">
                                    <div class="col-md-12">
                                            <h4>{{$courses->course_name}}</h4>
                                        </div>
                                    <div class="row show-cards">
                                <div class="col-md-4">
                                    <h6>Course Name</h6>
                                </div>
                                <div class="col-md-8">

                                </div>
                            </div>
                            <div class="row show-cards">
                                <div class="col-md-4">
                                    <h6>Course Description</h6>
                                </div>
                                <div class="col-md-8">
                                    {{$courses->course_desc_long}}
                                </div>
                            </div>
                            <div class="row show-cards">
                                <div class="col-md-4">
                                    <h6>Price</h6>
                                </div>
                                <div class="col-md-8">
                                    ${{$courses->price}} inc GST
                                </div>
                            </div>
                            <div class="row show-cards">
                                <div class="col-md-4">
                                    <h6>Duration</h6>
                                </div>
                                <div class="col-md-8">
                                    {{$courses->duration}}
                                    @if($courses->duration > 1)
                                        days
                                    @else
                                        day
                                    @endif
                                </div>
                            </div>
                            <div class="row show-cards">
                                <div class="col-md-4">
                                    <h6>Start Time</h6>
                                </div>
                                <div class="col-md-8">
                                    {{$courses->start_time}}
                                </div>
                            </div>
                            <div class="row show-cards">
                                <div class="col-md-4">
                                    <h6>End Time</h6>
                                </div>
                                <div class="col-md-8">
                                    {{$courses->end_time}}
                                </div>
                            </div>
                        </div>
                    </div>



                    @if (Auth::check())
                        <a class="btn btn-primary" href="/courses/{{$courses->id}}/edit">Edit</a>
                        <a class="btn btn-warning mx-1" href="/courses/">Cancel</a>
                    @else
                        <a class="btn btn-info" href="/bookings/create">Book now</a>
                        <a class="btn btn-outline-dark" href="/">Cancel</a>
                    @endif

                </div>
            </div>


@endsection

