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

Route::get('kad01_1','Kad01Controller@index');
Route::get('kad02_1','Kad02_1Controller@index');
Route::get('kad02_2','Kad02_2Controller@index');
Route::get('kad03_1','Kad03_1Controller@index');
Route::get('kad03_3','Kad03_3Controller@index');
Route::get('kad04_1','Kad04_1Controller@index');
Route::get('kad04_1/{calDate?}','Kad04_1Controller@index');
Route::get('kad05_1/','Kad05_1Controller@index');
Route::post('kad05_1/','Kad05_1Controller@post');
Route::get('kad06_1','Kad06_1Controller@index');
Route::post('kad06_1','Kad06_1Controller@post');
Route::get('form/','FormController@index');
