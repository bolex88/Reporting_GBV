<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical_Report extends Model
{
    protected $fillable = [
    	
    ];

	public function police(){
		return $this->belongsTo('App\Police');
	}
}
