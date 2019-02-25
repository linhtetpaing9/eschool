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

Route::get('/', 'SearchController@main')->middleware('auth');


Route::resource('/admin/student', 'StudentController')->except(['jsonData', 'getSection']);
Route::get('/admin/section/get/{id}', 'StudentController@getSection');




Route::get('/admin/student/api/jsonData', 'StudentController@jsonData');


Route::get('/search', 'SearchController@search')->name('student.search');




Route::get("student-data", "StudentController@datatable")->name("student.data");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
