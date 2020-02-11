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

route::get('/login','AuthController@index')->name('login');
route::get('/register','AuthController@create');

route::post('/postuser','AuthController@store');
route::post('/getlogin','AuthController@login');
route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'],function(){


Route::get('/', 'HomeController@index');

	//admin
		//home
		route::get('/index','HomeController@index');
		//cars
		route::get('/cars','CarsController@index');
		route::get('/car/add','CarsController@create');
		route::post('/cars/add','CarsController@store');
		route::post('/cars/update/{id}','CarsController@update');
		route::get('/cars/edit/{cars}','CarsController@edit');
		route::get('/car/{cars}/delete','CarsController@destroy');

		//user
		route::get('/user','UserController@index');
		route::get('/user/{user}/edit','UserController@edit');
		route::post('/user/update/{id}','UserController@update');
		route::get('/user/{user}/delete','UserController@destroy');
		//mail
		route::post('/transaction/add','TransactionsController@store');
		//transaction
		route::get('/transaction/{transaction}/edit','TransactionsController@edit');
		route::post('/transaction/{id}/update','TransactionsController@update');
		route::get('/transaction/{transaction}/delete','TransactionsController@destroy');
		//return
		route::get('/return/{transaction}/add','TransactionsController@show');
		route::post('/return/add','ReturnsController@store');
		route::get('/return','ReturnsController@index');
		//balance
		route::get('/balance','BalancesController@index');

	//costumer
		//transaction
		route::get('/cars/{cars}/rent','CarsController@edit');
		route::get('/transaction','TransactionsController@index');
			
});