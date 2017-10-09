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
    $firstname = "melissa";
    $name = "loeser";
    return view('welcome', compact('firstname','name'));
//    return view('welcome', ['nom' => $name, 'prenom' => $firstname]);
});

// Route::get('/tasks', 'TaskController@index');
// Route::get('/tasks/{id}', 'TaskController@show');
Route::resource('/tasks', 'TaskController');