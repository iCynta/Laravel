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

Route::get('role',[
   'middleware' => 'role:Programmer',
   'uses' => 'TestController@index',
]);

Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCController@index',
]);

Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);

Route::get('/usercontroller/oauth',[
   'middleware' => 'Second',
   'uses' => 'UserController@index'
]);

Route::get('/usercontroller',[
   'middleware' => 'Second',
   'uses' => 'UserController@index'
]);

Route::resource('crud','CrudController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
