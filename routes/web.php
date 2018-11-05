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
route::get('test',function(){
	return view('admin.course.manageCourse');
});



