@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>View Courses</h2>
                <hr>
            </div>

            <p>
                <a class="btn btn-outline-primary mx-1 "
                   href="/courses/create">Create new courses</a>
            </p>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Description - Short</th>
                        <th scope="col">Description - Long</th>
                        <th scope="col">Price</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <th scope="row">{{$course->id}}</th>
                            <td>{{$course->course_name}} </td>
                            <td>{{$course->course_desc_short}}</td>
                            <td>{{$course->course_desc_long}}</td>
                            <td>${{$course->price}}</td>
                            <td>{{$course->duration}}
                                @if($course->duration > 1)
                                    days
                                @else
                                    day
                                @endif
                            </td>
                            <td>{{$course->start_time/*->format("H:i")*/}}</td>
                            <td>{{$course->end_time}}</td>
                            <td>
                                <form action="/courses/{{$course->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-outline-primary mx-1 "
                                           href="/courses/{{$course->id}}">Show</a>
                                        <a class="btn btn-outline-success mx-1"
                                           href="/courses/{{$course->id}}/edit">Edit</a>
                                        <button type="submit" title="delete" class="btn btn-outline-secondary mx-1">
                                            Delete
                                        </button>
                                    @endauth
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
