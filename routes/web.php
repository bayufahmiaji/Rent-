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

route::get('/login','AuthController@index')->name('login');
route::get('/register','AuthController@create');

route::post('/postuser','AuthController@store');
route::post('/getlogin','AuthController@login');
route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'],function(){
	//admin
		//home
		route::get('/index','HomeController@index');
		//cars
		route::get('/cars','CarsController@index');
		route::get('/car/add','CarsController@create');
		route::post('/cars/add','CarsController@store');
		route::get('/cars/edit/{cars}','CarsController@edit');
		//user
		route::get('/user','UserController@index');
		//mail
		route::post('/transaction/add','TransactionsController@store');
		//transaction
		route::get('/transaction/{transaction}/edit','TransactionsController@edit');
		route::post('/transaction/{id}/update','TransactionsController@update');
		//return
		route::get('/return/{transaction}/add','TransactionsController@show');
		route::post('/return/add','ReturnsController@store');
		route::get('/return','ReturnsController@index');

	//costumer
		//transaction
		route::get('/cars/{cars}/rent','CarsController@edit');
		route::get('/transaction','TransactionsController@index');
			
});