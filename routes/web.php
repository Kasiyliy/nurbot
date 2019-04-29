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

Route::get('/shapes', ['uses' => 'ShapeController@index']);
Route::get('/shapes/current', ['uses' => 'ShapeController@getCurrent'])->where('id', '[0-9]+');;
Route::get('/shapes/current/{id}', ['uses' => 'ShapeController@setCurrent'])->where('id', '[0-9]+');;
