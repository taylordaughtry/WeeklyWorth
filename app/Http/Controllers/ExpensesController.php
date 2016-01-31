<?php

namespace App\Http\Controllers;

use App\Company;
use App\Expense;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::all()->sortByDesc('amount');

        return view('expenses/index')->with('expenses', $expenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query = Company::all('id', 'name')->toArray();

        // TODO: Rework this to be more efficient. Could probably be done in a
        // shorter way.
        $companies = [];

        foreach ($query as $row) {
            $companies[$row['id']] = $row['name'];
        }

        return view('expenses/create')->with('companies', $companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->toArray();

        $data['amount'] = preg_replace("/[^0-9\.]/", "",$data['amount']);

        Expense::create($data);

        return redirect('/expense');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::destroy($id);

        return redirect('/expense');
    }
}
