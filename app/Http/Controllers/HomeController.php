<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Course;
use App\Models\Coursedate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
/*        dd($courses);*/
        return view('home.index', ['courses' => $courses]);
    }

    public function show(Home $home)
    {
        return view('home.show', ['home' => $home]);
    }
}