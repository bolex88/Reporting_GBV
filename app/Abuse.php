<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abuse extends Model
{
    protected $fillable =
    [
        'Abuses', 'Types_Abuse', 'Possible_Indicators', 'Child_Name',
        'Birthdate', 'Child_Address', 'Contact_Number', 'Ethnicity', 
        'Parents_Names', 'Alleged_Perpetrators_Name', 'Child_Whereabouts',
        'Next_contact', 'Court_Orders', 'Notifier_Fullname', 'Job_Title',
        'Notifier_Address', 'Notifier_Contact', 'Relationship', 'Contact_Family',
        'Working_Child', 'Caregivers_Aware', 'Expection_Child', 'Action_Expecting',
        'Action_Taken', 'Impact_Made', 'Disclose', 'Who', 'Injuries', 'Doctor',
        'Police', 'Concerns', 'Caregivers_Protective', 'Caregiver_Behaviour',
        'Child_Behaviour', 'Family_Historys', 'What_Prompted', 'Report_Made', 'Child_Aware',
    ];

    // public function polices(){
    //     return $this->hasMany('App/Police');
    // }

    public function medical_referrers(){
        return $this->hasMany('App/Medical_Referre');
    }

    public function medical_reports(){
        return $this->hasMany('App/Medical_Report');
    }

}
