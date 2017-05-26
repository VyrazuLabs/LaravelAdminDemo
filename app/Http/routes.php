<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   return Redirect::to('/login');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//ROUTES FOR AUTHENTICATED USERS
Route::group([ 'middleware' => 'auth' ], function() {

	Route::group(['prefix' => 'admin_rwt'], function() {
		Route::group(['namespace' => 'Admin'], function() {
			Route::get('/dashboard', array('uses' => 'AdminController@dashboard'));
			Route::get('/original-list', array('uses' => 'AdminController@originalList'));

		});

		//route for user creation
		Route::group(['namespace' => 'User','prefix' => 'user'], function() {
			Route::get('/create', array('uses' => 'UserController@create'));
			Route::get('/list', array('uses' => 'UserController@list'));
			Route::get('/edit/{user_id}', array('uses' => 'UserController@edit'));
			Route::post('/save', array('uses' => 'UserController@save'));
			Route::get('/delete/{user_id}', array('uses' => 'UserController@delete'));
		});

		//route for company creation
		Route::group(['namespace' => 'Company','prefix' => 'company'], function() {
			Route::get('/create', array('uses' => 'CompanyController@create'));
			Route::get('/list', array('uses' => 'CompanyController@list'));
			Route::post('/save', array('uses' => 'CompanyController@save'));
			Route::get('/edit/{user_id}', array('uses' => 'CompanyController@edit'));
			Route::get('/delete/{user_id}', array('uses' => 'CompanyController@delete'));



		});
	});
});