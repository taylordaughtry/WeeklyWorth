<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Company;
use App\Income;

use Request;
use App\Http\Controllers\Controller;

class BillsController extends Controller
{
    public function index()
    {
    	$data = array(
    		'companies' => Company::all(),
    		'bills' => Bill::all(),
            'incomes' => Income::all(),
		);

    	return view('index')->with('data', $data);
    }

    public function create()
    {
        $companies = Company::lists('name', 'id');

    	return view('bills.create')->with('companies', $companies);
    }

    public function list()
    {
        return false;
    }

    public function store()
    {
    	Bill::create(Request::all());

        return Redirect('/');
    }
}
