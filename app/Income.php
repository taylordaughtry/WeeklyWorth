<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
    	'company_id',
    	'pay_day',
    	'description',
    	'amount'
    ];

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}
