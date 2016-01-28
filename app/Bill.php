<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
    	'company_id',
    	'due_date',
    	'description',
    	'amount'
    ];

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}
