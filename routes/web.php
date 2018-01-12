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

Route::get('/cursos/', 'CoursesController@showCourses')->name('course.all');

Route::get('/tutoriales/', 'TutorialsController@showTutorials')->name('tutorials.all');
Route::get('/tv/', 'TvsController@showTv')->name('tvs.all');
Route::get('/intereses/', 'InterestsController@showInterest')->name('interests.all');

Route::get('datatable', ['uses'=>'listaController@datatable']);
Route::get('datatables/getUsers', ['as'=>'datatable.getUsers','uses'=>'ListaController@getUsers']);

Route::get( '/users/login', 'UserController@showLogin')->name('user.login.get');
Route::post('/users/login', 'UserController@doLogin')->name('user.login.post');
Route::get( '/users/register', 'UserController@showRegister')->name('user.register.get');
Route::post('/users/register', 'UserController@doRegister')->name('user.register.post');

Route::post('/users/logout', 'UserController@doLogout')->name('user.logout.post');
Route::get( '/users/profile', 'UserController@showProfile')->name('user.profile');

