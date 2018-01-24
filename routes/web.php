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

Route::get('/', 'HomeController@showHome')->name('home');

Route::get('/cursos/', 'CourseController@showCourses')->name('course.all');
Route::get('/cursos/{id}', 'CourseController@showCourse')->name('course');

Route::get('/tutoriales/', 'TutorialController@showTutorials')->name('tutorial.all');
Route::get('/tutoriales/{id}', 'TutorialController@showTutorial')->name('tutorial');

Route::get('/tv/', 'TvController@showTvs')->name('tv.all');
Route::get('/tv/{id}', 'TvController@showTv')->name('tv');

Route::get('/planes/', 'PlanController@showPlans')->name('plan.all');
Route::get('/planes/{id}', 'PlanController@showPlan')->name('plan');

Route::get('/intereses/', 'InterestController@showInterest')->name('interest.all');

Route::get( '/users/login', 'UserController@showLogin')->name('user.login.get');
Route::post('/users/login', 'UserController@doLogin')->name('user.login.post');
Route::get( '/users/register', 'UserController@showRegister')->name('user.register.get');
Route::post('/users/register', 'UserController@doRegister')->name('user.register.post');
Route::post('/users/profile', 'UserController@doPay')->name('user.pay.post');

Route::post('/users/logout', 'UserController@doLogout')->name('user.logout.post');
Route::get( '/users/profile', 'UserController@showProfile')->name('user.profile');
Route::post('/users/cursos/{id}/leave', 'UserController@leaveCourse')->name('user.course.leave.post');
Route::post('/users/cursos/{id}/join', 'UserController@joinCourse')->name('user.course.join.post');

Route::get('datatables/getCourses', ['as'=>'datatable.getCourses','uses'=>'CourseController@getCourses']);
