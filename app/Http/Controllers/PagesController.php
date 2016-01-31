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
        // TODO: Decide whether or now to show a monthly earnings, instead of
        // just a weekly breakdown of the totals.

    	$data['incomes'] = Income::all()->sortByDesc('amount');

        $data['expenses'] = Expense::all()->sortByDesc('amount');

    	$data['totalIncome'] = DB::table('incomes')->sum('amount') / 4;

        $data['totalExpenses'] = DB::table('expenses')->sum('amount') / 4;

        $data['weeklyWorth'] = $data['totalIncome'] - $data['totalExpenses'];

    	return view('index', $data);
    }
}
