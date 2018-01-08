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

Route::get('/', 'homeController@index')->name('home');

Route::get('/cursos', 'homeController@cursos')->name('cursos');

Route::get('datatable', ['uses'=>'listaController@datatable']);
Route::get('datatable/getUsers', ['as'=>'datatable.getUsers','uses'=>'listaController@getUsers']);
