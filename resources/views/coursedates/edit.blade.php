@extends('layouts.app')
@section('content')

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

                    <div class="col-md-6">
                        <label for="id">ID</label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" id="id"
                               name="id" value="{{$coursedate->id}}" readonly>
                    </div>


                    <div class="col-md-6">
                        <label for="course_id">Course ID</label>
                        <input type="text" class="form-control @error('course_id') is-invalid @enderror" id="course_id"
                               name="course_id" value="{{$coursedate->course_id}}">
                    </div>

                    <div class="col-md-6">
                        <label for="course_name">Course Name</label>
                        <input type="text" class="form-control @error('course_name') is-invalid @enderror"
                               id="course_name"
                               name="course_name" value="Name not setup yet">
                    </div>

                    <div class="col-md-6">
                        <label for="scheduled_date">Course Date</label>
                        <input type="date" class="form-control @error('scheduled_date') is-invalid @enderror"
                               id="scheduled_date" name="scheduled_date"
                               value="{{$coursedate->scheduled_date}}">
                    </div>

                    <div class="col-md-6">
                        <label for="max_attendee">Attendee Maximum</label>
                        <input type="number" class="form-control @error('max_attendee') is-invalid @enderror"
                               id="max_attendee" name="max_attendee" value="{{$coursedate->max_attendee}}">
                    </div>

                    <div class="col-md-12">
                        <label for="venue">Venue</label>
                        <input type="text" class="form-control @error('venue') is-invalid @enderror" id="venue"
                               name="venue" value="{{$coursedate->venue}}">
                    </div>
            </div>

            <input class="btn btn-primary" type="submit" value="Save">
            <a class="btn btn-warning mx-1" href="/coursedates">Cancel</a>
            </form>
        </div>
    </div>
    </div>
    </div>

@endsection
