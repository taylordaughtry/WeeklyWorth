<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
    	'company_id',
    	'name',
    	'pay_day',
    	'description',
    	'type',
    	'amount'
    ];
}
