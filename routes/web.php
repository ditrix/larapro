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

//Route::get('/', function () { return view('home');});
//Route::get('/mobile', function () { return view('mobile');});


Route::get('/', 'MainController@index');
Route::get('/contacts', 'MainController@contacts');
Route::get('/about', 'MainController@about');

Auth::routes();
Route::get('/logout', 'AuthController@logout');

Route::get('/users', 'UserController@index');
Route::put('/users', 'UserController@save');
Route::get('/users/{user}/edit', 'UserController@input');
Route::get('/users/{user}/delete', 'UserController@destroy');

