<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendenceController;



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

Route::get('/', function () {
      return view('welcome');
   
    // $teachers = \App\Teacher::all();
    // $courses = \App\Course::first();
    // $class = \App\Clas::all();
    // // $courses->teachers()->attach($teachers);
    
    //  dd($class);
 

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/teachers', 'teacherController@index');


Route::resource('teachers','teacherController');
Route::resource('class','ClassController');
Route::resource('students','StudentController');
Route::resource('courses','CoursesController');
Route::resource('attendences','AttendenceController');

