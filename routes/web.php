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

Route::get('todos', 'TodosController@index');

Route::get('todos/{todo}', 'TodosController@show');

Route::get('new-todo', 'TodosController@create');

Route::post('new-store', 'TodosController@store');

Route::get('todos/{todoid}/edit', 'TodosController@edit');

Route::post('update-todo', 'TodosController@update');

Route::get('todos/{todoid}/delete', 'TodosController@destroy');