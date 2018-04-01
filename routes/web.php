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

Route::get('/','Auth\LoginController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/course/add', 'CourseController@create')->name('course.create');;

Route::post('Course/insert', 'CourseController@store')->name('course.insert');

Route::get('Course/overview', 'CourseController@index')->name('course.index');

Route::get('/studymoment/add','StudymomentController@create')->name('studymoment.create');

Route::get('studymoment/overview', 'StudymomentController@index')->name('studymoment.index');

Route::post('Course/insert', 'StudymomentController@store')->name('studymoment.insert');

Route::get('/user', 'UserController@index')->name('user');

Route::post('/user/{id}', 'UserController@index');

Route::post('user/edit/{id}','UserController@edit')->name('user.edit');

Auth::routes();


