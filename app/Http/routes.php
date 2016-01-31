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