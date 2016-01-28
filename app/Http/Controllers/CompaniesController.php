<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Company;

use Request;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    public function create()
    {
    	return view('companies.create');
    }

    public function store()
    {
    	Company::create(Request::all());

    	return Redirect('/');
    }
}
