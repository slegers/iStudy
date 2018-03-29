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

Route::get('/course/add', 'CourseController@edit')->name('add_course');;

Route::get('/studymoment/add','StudymomentController@edit')->name('add_studymoment');

Route::get('/user', 'UserController@index')->name('user');

Route::post('/user/{id}', 'UserController@index');

Route::post('user/edit/{id}','UserController@edit')->name('user.edit');

Auth::routes();


