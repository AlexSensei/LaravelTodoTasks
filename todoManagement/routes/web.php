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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks/{status}', 'TasksController@index');

Route::get('/tasks/{id}', 'TasksController@show');

Route::delete('/tasks/delete/{id}', 'TasksController@destroy');

Route::put('/tasks/update/{id}', 'TasksController@update');