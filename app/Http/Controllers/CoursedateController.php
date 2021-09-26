<?php

namespace App\Http\Controllers;

use App\Models\Coursedate;
use Illuminate\Http\Request;

class CoursedateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coursedates = Coursedate::all();
        /*        dd($coursedates);*/
        return view('coursedates.index', ['coursedates' => $coursedates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coursedates.create');
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
            'scheduled_date' => 'required',
            'max_attendee' => '',
            'venue' => 'required',
        ]);

        $coursedate = new coursedate();
        $coursedate->scheduled_date = request('scheduled_date');
        $coursedate->max_attendee = request('max_attendee');
        $coursedate->venue = request('venue');
        $coursedate->course_id = Auth::course()->id;

        $coursedate->save();

        return redirect('coursedates');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coursedate  $coursedate
     * @return \Illuminate\Http\Response
     */
    public function show(Coursedate $coursedate)
    {
/*        return view(' coursedates.show',['coursedate'=>$coursedate]);*/

        $coursedates = Coursedate::all();
        return view('coursedates.show', ['coursedates' => $coursedates]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coursedate  $coursedate
     * @return \Illuminate\Http\Response
     */
    public function edit(Coursedate $coursedate)
    {
        return view('coursedates.edit',['coursedate'=>$coursedate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coursedate  $coursedate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coursedate $coursedate)
    {

        request()->validate([
            'scheduled_date' => 'required',
            'max_attendee' => '',
            'venue' => 'required',
        ]);

        $coursedate->update($request->all());

        return redirect('coursedates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coursedate  $coursedate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coursedate $coursedate)
    {
        $coursedate->delete();
        return redirect('coursedates');
    }
}
