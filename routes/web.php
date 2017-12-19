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

Route::get('/', 'homeController@index');

Route::get('/listado', 'homeController@listado')->name('home.listado');

Route::get('datatable', ['uses'=>'PostController@datatable']);
Route::get('datatable/getUsers', ['as'=>'datatable.getUsers','uses'=>'PostController@getUsers']);
