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
Route::put('/gym/edit/{id}', 'GymController@store');
Route::delete('/gym/delete/{id}', 'GymController@destroy');

Route::get('/vote/average', 'GymController@averageRating');

//Routes to get, post and delete user data
Route::get('/users', 'UserController@index');
Route::post('/users/login', 'UserController@login');
Route::get('/users/{id}', 'UserController@show');
Route::post('/users/save', 'UserController@store');
Route::put('/users/{id}', 'UserController@update');
Route::delete('/users/delete/{id}', 'UserController@destroy');

//Routes to get, post and delete workouts data
Route::get('/workout', 'WorkoutController@index');
Route::get('/workout/{id}', 'WorkoutController@show');
Route::get('/user/workout', 'WorkoutController@showUserWorkout');
Route::post('/workout/save', 'WorkoutController@store');
Route::put('/workout/{id}', 'WorkoutController@update');
Route::delete('/workout/delete/{id}', 'WorkoutController@destroy');

//Routes to get, post and delete instructors data
Route::get('/instructor', 'WorkoutController@index');
Route::get('/instructor/{id}', 'WorkoutController@show');
Route::post('/instructor/save', 'WorkoutController@store');
Route::put('/instructor/{id}', 'WorkoutController@update');
Route::delete('/instructor/delete/{id}', 'WorkoutController@destroy');
