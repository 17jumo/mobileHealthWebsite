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

Route::get('/courses/index', [CourseController::class, 'index']);

Route::resource('courses', CourseController::class);

Route::resource('courses', CourseController::class)->only(['index','show','create','store','edit','update',]);
Route::resource('courses', CourseController::class)->only(['destroy'])->middleware('auth');


//Route::get('/', function () {
//    return view('courses.index');
//});
Route::get('/', [CourseController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
