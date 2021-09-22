<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/courses/index', [CourseController::class, 'index']);*/

Route::resource('courses', CourseController::class);

Route::resource('courses', CourseController::class)->only(['index','create','store','edit','update',]);
Route::resource('courses', CourseController::class)->only(['show','destroy'])->middleware('auth');


//Route::get('/', function () {
//    return view('courses.index');
//});
Route::get('/', [CourseController::class, 'index']);
Route::get('/courses/index', [CourseController::class, 'index']);
Route::get('/courses/show/{{id}}', [CourseController::class, 'show']);
Route::get('/courses/create', [CourseController::class, 'create']);
Route::get('/courses/edit', [CourseController::class, 'edit']);

Route::get('/coursedates/index', [CoursedateController::class, 'index']);
Route::get('/coursedates/show', [CoursedateController::class, 'show']);
Route::get('/coursedates/create', [CoursedateController::class, 'create']);
Route::get('/coursedates/edit', [CoursedateController::class, 'edit']);

Route::get('/bookings/index', [BookingController::class, 'index']);
Route::get('/bookings/show', [BookingController::class, 'show']);
Route::get('/bookings/create', [BookingController::class, 'create']);
Route::get('/bookings/edit', [BookingController::class, 'edit']);


/*Route::get('/aboutus', function () {return view('home.aboutus');});
Route::get('/contactus', function () {return view('home.contactus');});
Route::get('/payment', function () {return view('home.payment');});*/


/*Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth'])->name('dashboard');*/


//both of below functions work for Dashboard
/*Route::get('/', function () {
//    return view('dashboard');
    return redirect('/courses');
})->middleware(['auth'])->name('/');*/

Route::get('/dashboard', 'App\Http\Controllers\CourseController@index');

require __DIR__.'/auth.php';
