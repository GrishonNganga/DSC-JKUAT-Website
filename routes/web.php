<?php

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

Route::get('/', 'PagesController@index');
Route::get('/projects', 'PagesController@projects');
Route::get('participate', 'PagesController@participate');
Route::get('resources', 'PagesController@resources');
Route::get('/admin', 'AdminsController@index')->middleware('adminCheck');

Route::resource('/admin', 'AdminsController');
Route::resource('/attend', 'AttendanceController');
Route::resource('/users', 'UsersController');
Route::get('/users', 'UsersController@index');

Route::resource('/events', 'EventsController');
Route::get('/events', 'EventsController@index');
Route::get('/events/create', 'EventsController@create');



Auth::routes(['verify' => true]);

//I don't think this route is being used. Will remove in future if not in use.
//Route::get('/dashboard', 'DashboardController@index');
