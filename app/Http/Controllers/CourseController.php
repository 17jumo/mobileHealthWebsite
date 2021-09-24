<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
//        dd($courses);
        return view('courses.index',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'course_name' => 'required',
            'course_desc_long' => 'required',
            'course_desc_short' => 'required',
            /*'course_image' => 'nullable|image|mimes:jpeg,jpg,png',*/
            'duration' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'price' => 'required',
        ]);

        $course = new course();
        $course->course_name = request('course_name');
        $course->course_desc_long = request('course_desc_long');
        $course->course_desc_short = request('course_desc_short');
        $course->duration = request('duration');
        $course->start_time = request('start_time');
        $course->end_time = request('end_time');
        $course->price = request('price');
        /*$course->course_image = request('course_image');*/
        $course->save();

        return redirect('courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('courses.show',['courses'=>$course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit',['courses'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        request()->validate([
            'course_name' => 'required',
            'course_desc_long' => 'required',
            'course_desc_short' => 'required',
            /*'course_image' => 'nullable|image|mimes:jpeg,jpg,png',*/
            'duration' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'price' => 'required',
        ]);

        $course->update($request->all());

        return redirect('courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('courses');
    }
}
