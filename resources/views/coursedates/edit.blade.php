@extends('layouts.app')
@section('content')


    <a class="btn btn-primary mx-1" href="/">View Courses</a>
    <a class="btn btn-primary mx-1 " href="/coursedates">View Course Dates</a>
    <a class="btn btn-primary mx-1 " href="/bookings">View Bookings</a>

    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>Course Dates - EDIT</h2>
                <hr>
            </div>

    <div class="form-content">
        <form method="POST" action="/coursedates/{{$coursedate->id}}">
            @method('PUT')
            @csrf

            <div class="row">
                <div class="form-group col-6">
                    <label for="startdate">Date</label>
                    <input type="date" class="form-control @error('startdate') is-invalid @enderror" id="startdate" name="startdate" value="{{$coursedate->startdate}}">
                </div>

                <div class="form-group col-6">
                    <label for="spacesAvailable">Spaces Available</label>
                    <input type="number" class="form-control @error('spacesAvailable') is-invalid @enderror" id="spacesAvailable" name="spacesAvailable" value="{{$coursedate->spacesAvailable}}">
                </div>
            </div>

            <input class="btn btn-primary" type="submit" value="Submit">
            <a class="btn btn-warning mx-1" href="/coursedates/index">Cancel</a>
        </form>
    </div>

@endsection


{{--
@extends('layouts.app')
@section('content')

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Edit Activity</h3>
                        <p>Edit in your activity data</p>
                        --}}
{{--                    <form class="requires-validation" novalidate>--}}{{--


                        <form method="POST" action="/coursedates/{{$coursedate->id}}">
                            @method('PUT')
                            @csrf

                            <div class="col-md-12">
                                <label for="actName">Activity Name</label>
                                <input class="form-control" type="text" name="actName" placeholder="Activity Name" value="{{$coursedate->actName}}" required>
                                --}}
{{--                                <div class="valid-feedback">Activity name is valid!</div>--}}{{--

                                --}}
{{--                                <div class="invalid-feedback">Activity name cannot be blank!</div>--}}{{--

                            </div>

                            <div class="col-md-12">
                                <label for="distance">Distance</label>
                                <input class="form-control" type="number" name="distance" placeholder="Distance (km)" value="{{$coursedate->distance}}" required>
                                --}}
{{--                                <div class="valid-feedback">Distance is valid!</div>--}}{{--

                                --}}
{{--                                <div class="invalid-feedback">Distance cannot be blank!</div>--}}{{--

                            </div>

                            <div class="col-md-12">
                                <label for="actName">Total Minutes</label>
                                <input class="form-control" type="number" name="totalTime" placeholder="Total Minutes" value="{{$coursedate->totalTime}}" required>
                                --}}
{{--                                <div class="valid-feedback">Time is valid!</div>--}}{{--

                                --}}
{{--                                <div class="invalid-feedback">Time cannot be blank!</div>--}}{{--

                            </div>

                            <div class="col-md-12">
                                <label for="actName">Date</label>
                                <input class="form-control" type="date" name="actDate" placeholder="Date" value="{{$coursedate->actDate}}" required>
                                --}}
{{--                                <div class="valid-feedback">Date is valid!</div>--}}{{--

                                --}}
{{--                                <div class="invalid-feedback">Date cannot be blank!</div>--}}{{--

                            </div>


                            <div class="col-md-12">
                                <label for="sport">Sport</label>
                                <select id="sport" name="sport" class="form-control" required>
                                    <option selected disabled value="">{{$coursedate->sport}}</option>
                                    <option value="run">Run</option>
                                    <option value="bike">Bike</option>
                                    <option value="ski">Ski</option>
                                    <option value="snowboard">Snowboard</option>
                                    <option value="kayak">Kayak</option>
                                </select>
                                --}}
{{--                                <div class="valid-feedback">You selected a sport!</div>--}}{{--

                                --}}
{{--                                <div class="invalid-feedback">Please select a sport!</div>--}}{{--

                            </div>


                            <div class="col-md-12">
                                <label for="actName">Description</label>
                                <textarea class="form-control" name="description" placeholder="{{$coursedate->description}}" required rows="3"></textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="img">Select image:</label>
                                <input type="file" id="actImage" name="actImage" accept="image/*">
                            </div>

                            <div class="form-button mt-3">
                                <input class="btn btn-primary" type="submit" value="Submit">
                                <a class="btn btn-primary" href="/activities/">Cancel</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
--}}
