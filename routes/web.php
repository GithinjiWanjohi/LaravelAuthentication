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

Route::get('/gym', 'GymController@index')->name('gym');
Route::get('/gym/{id}', 'GymController@show');
Route::post('/gym', 'GymController@store');
Route::put('/gym/{id}', 'GymController@update');
Route::delete('/gym/{id}', 'GymController@delete');

Route::get('/vote/average', 'GymController@averageRating');
