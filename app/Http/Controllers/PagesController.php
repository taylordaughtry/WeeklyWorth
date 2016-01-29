<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	return view('index');
    }
}
