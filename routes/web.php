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


Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/projects', 'ProjectController@index');
Route::get('/projects/{id}', 'ProjectController@show');

Route::get('/profiel', 'ProfielController@index');
Route::post('/storecv', 'CvController@storecv');

Route::get('/opdrachten', 'OpdrachtController@index');
Route::get('/opdrachten/{id}', 'OpdrachtController@show');

Route::get('/contact', 'ContactController@index');

Route::get('/opdrachtplaatsen', 'OpdrachtPlaatsController@index');
Route::post('/store', 'OpdrachtPlaatsController@store');

Route::get('/studenttoevoegen', 'UserAddController@index');
