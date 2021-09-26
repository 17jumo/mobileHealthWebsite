@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>Add New Dates</h2>
                <hr>
            </div>

            <div class="form-content">
            <form method="POST" action="/coursedates">
                @csrf

                    <div class="col-md-6">
                        <label for="course_id">Choose a course:</label>
                        <select name="course_id" id="course_id" class="form-control @error('id') is-invalid @enderror">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="scheduled_date">Scheduled Date</label>
                        <input type="date" class="form-control @error('scheduled_date') is-invalid @enderror"
                               id="scheduled_date" name="scheduled_date" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="max_attendee">Maximum Attendees</label>
                        <input type="text" class="form-control @error('max_attendee') is-invalid @enderror"
                               id="max_attendee" name="max_attendee" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="venue">Venue</label>
                        <input type="text" class="form-control @error('venue') is-invalid @enderror"
                               id="venue" name="venue" value="18 Glenda Drive, Frankton, Queenstown" required>
                    </div>

                    <div class="form-button mt-3">
                        <input class="btn btn-primary" type="submit" value="Save">
                        <a class="btn btn-warning" href="/coursedates">Cancel</a>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
    </div>



@endsection


