<?php

Route::get('/', 'PagesController@index')->name('home');

Route::resource('income', 'IncomesController');
Route::resource('expense', 'ExpensesController');