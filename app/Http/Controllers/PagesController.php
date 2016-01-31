<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Income;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	/**
	 * Homepage Method
	 * @method index
	 * @return view The homepage HTML.
	 */
    public function index()
    {
    	$data['incomes'] = Income::all()->sortByDesc('amount');

    	$data['totalIncome'] = DB::table('incomes')->sum('amount');

    	return view('index', $data);
    }
}
