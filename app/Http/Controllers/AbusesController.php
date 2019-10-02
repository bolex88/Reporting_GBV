<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abuse;


class AbusesController extends Controller
{

   public function ShowPhysicalAbuse(){
       return view('Abuses.physical');
   }

   public function ShowDomesticAbuse(){
       return view('Abuses.domestic');
   }

   public function ShowSexualAbuse(){
       return view('Abuses.sexual');
   }

   public function ShowPsychologicalAbuse(){
       return view('Abuses.psychological');
   }

   public function ShowDiscriminatorylAbuse(){
       return view('Abuses.discriminatory');
   }

   public function ShowOrganisationalAbuse(){
       return view('Abuses.organisational');
   }

   public function ShowNeglectAbuse(){
       return view('Abuses.neglect');
   }

   
    /**
     * Display a listing of the Abuses.
     *
     //* @return \Illuminate\Http\Response
     */
    //public function index(Request $request)
    //{
       // $request->session()->forget('abuses');
        //$abuses = Abuses::all();
        //return view('welcome',compact('abuses',$abuses));
    //}
    
    public function addAbuses(Request $request){
        //$Abuses = $selected->Abuses;
        $Types_Abuse = $request->Types_Abuse;
        $Possible_Indicators = $request->Possible_Indicators;
        $Child_Name = $request->Child_Name;
        $Birthdate = $request->Birthdate;
        $Child_Address = $request->Child_Address;
        $Contact_Number = $request->Contact_Number;
        $Ethnicity = $request->Ethnicity;
        $Parents_Names = $request->Parents_Names;
        $Alleged_Perpetrators_Name = $request->Alleged_Perpetrators_Name;
        $Child_Whereabouts = $request->Child_Whereabouts;
        $Next_contact = $request->Next_contact;
        $Court_Orders = $request->Court_Orders;
        $Notifier_Fullname = $request->Notifier_Fullname;
        $Job_Title = $request->Job_Title;
        $Notifier_Address = $request->Notifier_Address;
        $Notifier_Contact = $request->Notifier_Contact;
        $Relationship = $request->Relationship;
        $Contact_Family = $request->Contact_Family;
        $Working_Child = $request->Working_Child;
        $Caregivers_Aware = $request->Caregivers_Aware;
        $Expection_Child = $request->Expection_Child;
        $Action_Expecting = $request->Action_Expecting;
        $Action_Taken = $request->Action_Taken;
        $Impact_Made = $request->Impact_Made;
        $Disclose = $request->Disclose;
        $Who = $request->Who;
        $Injuries = $request->Injuries;
        $Doctor = $request->Doctor;
        $Police = $request->Police;
        $Concerns = $request->Concerns;
        $Caregivers_Protective = $request->Caregivers_Protective;
        $Caregiver_Behaviour = $request->Child_Behaviour;
        $Child_Behaviour = $request->Child_Behaviour;
        $Family_Historys = $request->Family_Historys;
        $What_Prompted = $request->What_Prompted;
        $Report_Made = $request->Report_Made;
        $Child_Aware = $request->Child_Aware;
        Abuse::create([
            //'Abuses'=>$Abuses,
            'Types_Abuse'=>$Types_Abuse, 
            'Possible_Indicators'=>$Possible_Indicators, 
            'Child_Name'=>$Child_Name,
            'Birthdate'=>$Birthdate,
            'Child_Address'=>$Child_Address,
            'Contact_Number'=>$Contact_Number,
            'Ethnicity'=>$Ethnicity,
            'Parents_Names'=>$Parents_Names,
            'Alleged_Perpetrators_Name'=>$Alleged_Perpetrators_Name,
            'Child_Whereabouts'=>$Child_Whereabouts,
            'Next_contact'=>$Next_contact,
            'Court_Orders'=>$Court_Orders,
            'Notifier_Fullname'=>$Notifier_Fullname,
            'Job_Title'=>$Job_Title,
            'Notifier_Address'=>$Notifier_Address,
            'Notifier_Contact'=>$Notifier_Contact,
            'Relationship'=>$Relationship,
            'Contact_Family'=>$Contact_Family,
            'Working_Child'=>$Working_Child,
            'Caregivers_Aware'=>$Caregivers_Aware,
            'Expection_Child'=>$Expection_Child,
            'Action_Expecting'=>$Action_Expecting,
            'Action_Taken'=>$Action_Taken,
            'Impact_Made'=>$Impact_Made,
            'Disclose'=>$Disclose,
            'Who'=>$Who,
            'Injuries'=>$Injuries,
            'Doctor'=>$Doctor,
            'Police'=>$Police,
            'Concerns'=>$Concerns,
            'Caregivers_Protective'=>$Caregivers_Protective,
            'Caregiver_Behaviour'=>$Child_Behaviour,
            'Child_Behaviour'=>$Child_Behaviour,
            'Family_Historys'=>$Family_Historys,
            'What_Prompted'=>$What_Prompted,
            'Report_Made'=>$Report_Made,
            'Child_Aware'=>$Child_Aware]);
        return redirect('/reports');
    }

       public function showReports(){
          $abuses = Abuse::all();
        return view('Reports.abuses', compact('abuses'));
    }
}


