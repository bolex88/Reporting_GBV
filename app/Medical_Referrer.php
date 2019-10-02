<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical_Referrer extends Model
{
    protected $fillable = [
    	'Survivor_Code_Number', 'Medical_Doctor_Ref', 'WACPS', 'Victim_Name',
    	'Age', 'Tribe', 'Address', 'Incidenct_Summary', 'Investigator_Name',
    	'Date_Time_Reported', 'Rank', 'Contact_Number', 'Medical_Officer',
    	'Focal_Person_Name','Signature','Focal_Person_Number',
    ];

    public function police(){
		return $this->belongsTo('App\Police');
	}

}
