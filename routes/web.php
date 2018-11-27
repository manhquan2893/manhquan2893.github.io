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



route::post('login','LoginController@postLogin');

route::get('login','LoginController@getLogin');

route::get('dashboard','DashboardController@getDashboard')->middleware('MemberMiddleware');

/*---------Manage Course------------*/
Route::get('manageCourse','CourseController@getManageCourse');
Route::post('insertAcademic','CourseController@postInsertAcademic');
Route::post('insertProgram','CourseController@postInsertProgram');
Route::post('insertLevel','CourseController@postInsertLevel');
Route::get('showLevel','CourseController@showLevel');
Route::post('insertShift','CourseController@postInsertShift');
Route::post('insertTime','CourseController@postInsertTime');
Route::post('insertCourse','CourseController@postInsertCourse');
Route::get('getCourses','CourseController@getCourses');
Route::get('getMoreCourse','CourseController@getMoreCourse');
Route::get('getMoreCourse','CourseController@getMoreCourse');
Route::get('getAjaxCourse','CourseController@getAjaxCourse');

Route::get('getAllCourses','CourseController@getAllCourses');

/*----------Student Info-------------------*/
Route::get('StudentInfo','StudentInfoController@getStudentInfo');
Route::get('getChooseCourse','StudentInfoController@getChooseCourse');
Route::post('upload','StudentInfoController@upload');






