@extends('layouts.app')
@section('content')

    show test course dates

    @foreach($coursedates as $coursedate)

        {{--<h3>{{$coursedate->course_id}}</h3>--}}
        <p>{{$coursedate->availableDates}}</p>
        <p>{{$coursedate->spacesAvailable}}</p>

    @endforeach

@endsection
