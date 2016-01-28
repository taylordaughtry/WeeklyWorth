<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
    	'name',
    ];

    public function bill()
    {
    	return $this->hasOne('App\Bill');
    }
}
