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

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


/*------------------------------------*\
	# Registration
\*------------------------------------*/

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');