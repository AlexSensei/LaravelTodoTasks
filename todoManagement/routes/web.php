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

Route::get('/tasks/{status}', 'TaskController@get_all');

Route::post('/tasks/add', 'TaskController@add');

Route::put('/tasks/delete/{id}', 'TaskController@delete');

Route::put('/tasks/update/{id}', 'TaskController@update');