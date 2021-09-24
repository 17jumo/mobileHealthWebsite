@extends('layouts.app')
@section('content')

    <div class="container">

        <a class="btn btn-primary mx-1" href="/">View Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates">View Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/bookings">View Bookings</a>

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Edit course dates</h2>
                    <hr>
                </div>


                <div class="form-content">
                    <form method="POST" action="/coursedates/{{$coursedate->id}}">
                        @method('PUT')
                        @csrf

                        <div class="row">

                            <div class="form-group col-12">
                                ID&nbsp&nbsp{{$coursedate->id}}
                            </div>

                            <div class="form-group col-6">
                                <label for="scheduled_date">Course Date</label>
                                <input type="date" class="form-control @error('scheduled_date') is-invalid @enderror"
                                       id="scheduled_date" name="scheduled_date"
                                       value="{{$coursedate->scheduled_date}}">
                            </div>

                            <div class="form-group col-6">
                                <label for="max_attendee">Attendee Maximum</label>
                                <input type="number" class="form-control @error('max_attendee') is-invalid @enderror"
                                       id="max_attendee" name="max_attendee" value="{{$coursedate->max_attendee}}">
                            </div>

                            <div class="form-group col-12">
                                <label for="venue">Venue</label>
                                <input type="text" class="form-control @error('venue') is-invalid @enderror" id="venue"
                                       name="venue" value="{{$coursedate->venue}}">
                            </div>

                        </div>

                        <input class="btn btn-primary" type="submit" value="Submit">
                        <a class="btn btn-warning mx-1" href="/">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
