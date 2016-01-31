<?php


/*------------------------------------*\
	# Pages
\*------------------------------------*/

Route::get('/', 'PagesController@index')->name('home');


/*------------------------------------*\
	# Resources
\*------------------------------------*/

Route::resource('income', 'IncomesController');
Route::resource('expense', 'ExpensesController');
Route::resource('company', 'CompaniesController');


/*------------------------------------*\
	# Authentication
\*------------------------------------*/

// TODO: Route::group these
//
Route::get('auth/login', [
	'as' => 'auth.login',
	'uses' => 'Auth\AuthController@getLogin',
]);

Route::post('auth/login', [
	'as' => 'auth.login',
	'uses' => 'Auth\AuthController@postLogin',
]);

Route::get('auth/logout', [
	'as' => 'auth.logout',
	'uses' => 'Auth\AuthController@getLogout',
]);


/*------------------------------------*\
	# Registration
\*------------------------------------*/

Route::get('auth/register', [
		'as' => 'auth.register',
		'uses' => 'Auth\AuthController@getRegister',
]);

Route::post('auth/register', [
		'as' => 'auth.register',
		'uses' => 'Auth\AuthController@postRegister',
]);

// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');