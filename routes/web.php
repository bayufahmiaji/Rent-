<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

route::get('/login','AuthController@index');
route::get('/register','AuthController@create');

route::post('/postuser','AuthController@store');
route::post('/getlogin','AuthController@login');
route::get('/index','HomeController@index');
route::get('/logout','AuthController@logout');

route::get('/cars','CarsController@index');
route::get('/user','UserController@index');
