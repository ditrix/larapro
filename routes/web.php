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

Route::get('/', function () { return view('homepage');});
Route::get('/mobile', function () { return view('mobile');});


//Route::get('/', 'MainController@index');
Route::get('/policy', 'MainController@policy');
Route::get('/about', 'MainController@about');
