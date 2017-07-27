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

Route::get('id/{id}', function ($id) {
    echo $id;
});

Route::get('name/{name?}', function ($name="Unknown") {
    echo $name;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');