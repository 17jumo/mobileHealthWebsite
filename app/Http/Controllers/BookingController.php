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


        return view('bookings.index', ['bookings' => $bookings, 'courses' => $courses,'coursedates' => $coursedates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /*dd($request);*/
        $courses = Course::all();
        $coursedates = Coursedate::where("course_id","=",1)->get();
        $courseprice=Course::where("id","=",1)->get();
        $old_id = 1;
        //
        return view('bookings.create', ['courses' => $courses, 'coursedates' => $coursedates, 'courseprice' => $courseprice, 'old_id' => $old_id ]);
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
           $courseprice=Course::where("id","=",$request->course_id)->get();
//        $coursedates = Coursedate::all();
        //IF CHECKING IF THEY ONLY CHANGE THE COURSE
        if ($request->first_name == null) {
            $coursedates = Coursedate::where("course_id", "=", $request->course_id)->get();
            // dd($request);
            $old_id = $request->get('course_id');
            return view('bookings.create', ['courses' => $courses, 'coursedates' => $coursedates, 'courseprice' => $courseprice, 'old_id' => $old_id ]);
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


        $stripe = new \Stripe\StripeClient(
      'sk_test_51JawcXEdQN6YZjuxiZyeug0fYd4GWKpmexqQ3Uw9BvL460IK5ktKUOtgpKeQF6elpZ1O1R998GAGjjH2djNep0cT00pG27q9iP'
    );
        $stripe->charges->create([
          'amount' => $request->input('course_total')*100,
          'currency' => 'nzd',
          'source' => 'tok_amex',
        ]);
        $booking->save();

         return view('home.confirm');

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
