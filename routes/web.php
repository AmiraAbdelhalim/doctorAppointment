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

Route::get('/users', 'users\UserController@index')->name('users.index');
Route::get('/user', 'users\UserController@edit')->name('user.edit');
Route::put('/user', 'users\UserController@update')->name('user.update');


Route::get('/admin', 'admins\AdminController@index')->name('admin.index');

Route::GET('/home',function(){return view('adminlte.dashboard');})->name('doctor.index')->middleware('auth:doctor');
Route::GET('doctor','doctor\LoginController@showLoginForm')->name('doctor.login');
Route::POST('doctor','doctor\LoginController@login');



