<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Coursedate;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*        dd($bookings);*/
        $bookings = Booking::all();
        $coursedates = Coursedate::all();
        $courses = Course::all();

        return view('bookings.index', ['bookings' => $bookings], ['courses' => $courses], ['coursedates' => $coursedates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /*dd($request);*/
        $coursedates = Coursedate::where("course_id","=",1)->get();

        $courses = Course::all();
        return view('bookings.create', ['courses' => $courses], ['coursedates' => $coursedates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $courses = Course::all();
//        $coursedates = Coursedate::all();

        //IF CHECKING IF THEY ONLY CHANGE THE COURSE
        if ($request->first_name == null) {
            $coursedates = Coursedate::where("course_id", "=", $request->course_id)->get();
            return view('bookings.create', ['courses' => $courses], ['coursedates' => $coursedates]);
        }

        request()->validate([
            'course_id' => 'required',
            'coursedate_id' => 'required',
            'course_total' => 'required',

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'company_name' => '',
            'street' => '',
            'suburb' => '',
            'city' => '',
            'postcode' => '',
            'country' => '',

            'is_terms_agreed' => 'required',
        ]);

        $booking = new booking();
        $booking->course_id = request('course_id');
        $booking->coursedate_id = request('coursedate_id');
        $booking->course_total = request('course_total');

        $booking->first_name = request('first_name');
        $booking->last_name = request('last_name');
        $booking->email = request('email');
        $booking->phone = request('phone');
        $booking->dob = request('dob');
        $booking->gender = request('gender');
        $booking->company_name = request('company_name');
        $booking->street = request('street');
        $booking->suburb = request('suburb');
        $booking->city = request('city');
        $booking->postcode = request('postcode');
        $booking->country = request('country');

        $booking->is_terms_agreed = request('is_terms_agreed');

        $booking->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', ['booking' => $booking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('bookings.edit', ['booking' => $booking]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
/*        if(! Gate::allows('admin')) {
            abort(403);
        }*/
        request()->validate([
            'course_id' => '',
            'coursedate_id' => '',
            'course_total' => '',

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'company_name' => '',
            'street' => '',
            'suburb' => '',
            'city' => '',
            'postcode' => '',
            'country' => '',

            'is_terms_agreed' => 'required',
        ]);

        $booking->update($request->all());
        return redirect('bookings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        /*        if(! Gate::allows('admin')) {
      /*            abort(403);
                }*/
        $booking->delete();
        return redirect('bookings');
    }
}
