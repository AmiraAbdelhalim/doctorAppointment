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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/user', 'users\UserController@edit')->name('user.edit');
    Route::put('/user', 'users\UserController@update')->name('user.update');
}); 

# ADMINLTE
Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin', 'admins\AdminController@index')->name('admin.index');
    Route::get('/users', 'users\UserController@index')->name('users.index');
    Route::get('/doctors', 'doctors\DoctorController@index')->name('doctors.index');
    Route::get('/appointments','appointments\AppointmentController@index')->name('appointments.index');
    Route::get('/appointments/create','appointments\AppointmentController@create')->name('appointments.create');
    Route::post('/appointments','appointments\AppointmentController@store')->name('appointments.store');
});


#Notification
Route::prefix('/markAsRead')->middleware(['auth',])->group(function(){
    Route::get('', function(){
            auth()->user()->unreadNotifications->markAsRead();
            return redirect()->back();
            
    })->name('mark');
});

#approve / decline notification
Route::group(['middleware' => 'auth'], function(){
    Route::put('/approve/{id}', 'appointments\AppointmentController@update')->name('appointment.update');

    Route::delete('/appointments/{id}','appointments\AppointmentController@destroy')->name('appointments.destroy');
});

#doctor gard
Route::GET('/doctor-home',function(){return view('home');})->name('doctor.index')->middleware('auth:doctor');
Route::GET('doctor','doctor\LoginController@showLoginForm')->name('doctor.login');
Route::POST('doctor','doctor\LoginController@login');



