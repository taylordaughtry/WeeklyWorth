<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
    	'company_id',
    	'name',
    	'description',
    	'due_date',
    	'amount',
    	'type'
    ];
}
