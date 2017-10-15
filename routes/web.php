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

Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/search/{search}', 'SearchController@index')->name('search');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'isuser'], function () {
    Route::resource('/movies', 'MovieController');
});