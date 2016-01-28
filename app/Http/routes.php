<?php

Route::get('/', 'BillsController@index');

Route::get('companies/list', 'CompaniesController@list');
Route::get('companies/create', 'CompaniesController@create');
Route::post('companies/create', 'CompaniesController@store');

Route::get('bills/list', 'BillsController@list');
Route::get('bills/create', 'BillsController@create');
Route::post('bills/create', 'BillsController@store');

Route::get('income/list', 'IncomesController@list');
Route::get('income/create', 'IncomesController@create');
Route::post('income/create', 'IncomesController@store');