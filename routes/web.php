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

Route::get('/home', function () {
    return "This is the home page";
});

Route::get('players', 'PlayerController@index')->name('players.index')->middleware('auth');

Route::get('players/create', 'PlayerController@create')->name('players.create')->middleware('auth');

Route::post('players', 'PlayerController@store')->name('players.store')->middleware('auth');

Route::get('players/{id}', 'PlayerController@show')->name('players.show')->middleware('auth');

Route::delete('players/{id}', 'PlayerController@destroy')->name('players.destroy');

Route::get('users/{id?}', function ($id = 'Riyaad Islam') {
    return "User page ".$id;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
