@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>Create a new course</h2>
                <hr>
            </div>

            <form method="POST" action="/courses">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <label for="course_name">Course name</label>
                        <input type="text" class="form-control @error('course_name') is-invalid @enderror"
                               name="course_name" id="course_name" required>
                    </div>
                    <div class="col-md-12">
                        <label for="course_desc_short">Description - Short</label>
                        <textarea class="form-control @error('course_desc_short') is-invalid @enderror"
                                  id="course_desc_short" name="course_desc_short" rows="4"
                                  required></textarea>

                    </div>
                    <div class="col-md-12">
                        <label for="course_desc_long">Description - Long</label>
                        <textarea class="form-control @error('course_desc_long') is-invalid @enderror"
                                  id="course_desc_long" name="course_desc_long" rows="4"
                                  required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="price">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                               id="price" name="price" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control @error('duration') is-invalid @enderror"
                               id="duration" name="duration" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="start_time">Start time</label>
                        <input type="text" class="form-control @error('start_time') is-invalid @enderror"
                               id="start_time" name="start_time" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="end_time">End time</label>
                        <input type="text" class="form-control @error('end_time') is-invalid @enderror"
                               id="end_time" name="end_time" value="" required>
                    </div>


                    <div class="form-button mt-3">
                        <input class="btn btn-primary" type="submit" value="Save">
                        <a class="btn btn-warning" href="/courses/">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

