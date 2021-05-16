<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard')->middleware('admin');
Route::resource('appointment', 'AppointmentController');
Route::resource('doctor', 'DoctorController');
Route::get('/hospital','HospitalController@index')->name('hospital');
Route::get('/admin/appointments', 'AdminController@appointments')->name('admin.appointments')->middleware('admin');
Route::post('/admin/appointments', 'AppointmentController@approve')->name('appointment.approve')->middleware('admin');
Route::get('/admin/doctors','AdminController@doctors')->name('admin.doctors')->middleware('admin');
