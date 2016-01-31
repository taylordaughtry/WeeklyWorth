<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Expense;
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

        // TODO: optimize these queries.

    	$data['incomes'] = Income::all()->sortByDesc('amount');

        $data['expenses'] = Expense::all()->sortByDesc('amount');

    	$data['totalIncome'] = DB::table('incomes')->sum('amount');

        $data['totalExpenses'] = DB::table('expenses')->sum('amount');

        $data['weeklyWorth'] = $data['totalIncome'] - $data['totalExpenses'];

    	return view('index', $data);
    }
}
