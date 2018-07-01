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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gym', 'GymController@index');
Route::get('/gym/create', 'GymController@create')->name('gym');
Route::get('/gym/{id}', 'GymController@show');
Route::post('/gym', 'GymController@store')->name('gymStore');
Route::put('/gym/edit/{id}', 'GymController@update');
Route::delete('/gym/delete/{id}', 'GymController@destroy');

Route::get('/vote/average', 'GymController@averageRating');

//Routes to get, post and delete user data
Route::get('/users', 'UserController@index');
Route::get('/users/{id}', 'UserController@show');
Route::post('/users/save', 'UserController@store');
Route::put('/users/{id}', 'UserController@update');
Route::delete('/users/{id}', 'UserController@destroy');
