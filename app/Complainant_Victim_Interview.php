<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complainant_Victim_Interview extends Model
{
	protected $fillable =[
		'Case_Number', 'Date', 'Complainant_Victim_Name', 'Age', 'Sex',
		'Tribe', 'Address', 'DOB', 'Birth_Place', 'Nationality', 'Height',
		'Weight', 'Complexion', 'Physique', 'Contact_Number', 'Father_Name',
		'Father_Address', 'Mother_Name', 'Mother_Address', 'Interview', 'Occurrence',
		'Occurrence_Date', 'Free_Narrative', 'Investigator', 'Victim_Sign',
	];

	public function police(){
		return $this->belongsTo('App\Police');
	}
}
