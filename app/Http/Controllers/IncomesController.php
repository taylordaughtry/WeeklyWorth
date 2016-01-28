<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Company;
use App\Income;

use Request;
use App\Http\Controllers\Controller;

class IncomesController extends Controller
{
    public function create()
    {
        $companies = Company::lists('name', 'id');

    	return view('incomes.create')->with('companies', $companies);
    }

    public function list()
    {
        return false;
    }

    public function store()
    {
    	Income::create(Request::all());

        return Redirect('/');
    }
}
