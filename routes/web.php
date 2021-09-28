<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


/*Route::get('/courses/index', [CourseController::class, 'index']);*/

/*Route::resource('courses', CourseController::class);*/

Route::resource('courses', CourseController::class)->only(['show','create',]);
Route::resource('courses', CourseController::class)->only(['index','create','store','edit','update','destroy'])->middleware('auth');

/*Route::resource('coursedates', CoursedateController::class);*/

/*Route::resource('coursedates', CoursedateController::class)->only([]);*/
Route::resource('coursedates', CoursedateController::class)->only(['index','create','store','edit','update','show','destroy'])->middleware('auth');

/*Route::resource('bookings', BookingController::class);*/

Route::resource('bookings', BookingController::class)->only(['create','store',]);
Route::resource('bookings', BookingController::class)->only(['index','edit','update','show','destroy'])->middleware('auth');


/*
Route::get('/', function () {
    return view('home.index');
});*/
Route::get('/dashboard', 'App\Http\Controllers\HomeController@index');
Route::get('/', [HomeController::class, 'index']);

/*Route::get('/', [CourseController::class, 'index']);*/
/*Route::get('/', 'App\Http\Controllers\HomeController@index');*/

/*JUST COMMENTING THIS
Route::get('/courses/index', [CourseController::class, 'index']);
Route::get('/courses/show/{{id}}', [CourseController::class, 'show']);
Route::get('/courses/create', [CourseController::class, 'create']);
Route::get('/courses/edit', [CourseController::class, 'edit']);
Route::get('/coursedates/index', [CoursedateController::class, 'index']);
Route::get('/coursedates/show', [CoursedateController::class, 'show']);
Route::get('/coursedates/create', [CoursedateController::class, 'create']);
Route::get('/coursedates/edit', [CoursedateController::class, 'edit']);
Route::get('/bookings/index', [BookingController::class, 'index']);
Route::get('/bookings/show/{{id}}', [BookingController::class, 'show']);
Route::get('/bookings/create', [BookingController::class, 'create']);
Route::get('/bookings/{{id}}/edit', [BookingController::class, 'edit']);
JUST COMMENTING THIS*/


Route::get('/home/aboutus', function () {return view('home.aboutus');});
Route::get('/home/contactus', function () {return view('home.contactus');});
Route::get('/home/terms', function () {return view('home.terms');});
Route::get('/home/show', function () {return view('home.show');});


/*Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth'])->name('dashboard');*/


//both of below functions work for Dashboard
/*Route::get('/', function () {
//    return view('dashboard');
    return redirect('/courses');
})->middleware(['auth'])->name('/');*/



require __DIR__.'/auth.php';
