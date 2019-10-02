<?php

namespace App\Http\Controllers;
use App\Medical_Referrer;
use App\Complainant_Victim_Interview;
use App\Medical_Report;

use Illuminate\Http\Request;
use App\Police;
use App\Abuses;


class PoliceController extends Controller
{
    public function showMedicalReferrerForm(){
    	return view('Police.medical-referrer');
    }

    public function addReferrer(Request $request){
    	$Survivor_Code_Number = $request->Survivor_Code_Number;
    	$Medical_Doctor_Ref = $request->Medical_Doctor_Ref;
    	$WACPS = $request->WACPS;
    	$Victim_Name = $request->Victim_Name;
    	$Age = $request->Age;
    	$Tribe = $request->Tribe;
    	$Address = $request->Address;
    	$Incidenct_Summary = $request->Incidenct_Summary;
    	$Investigator_Name = $request->Investigator_Name;
    	$Date_Time_Reported = $request->Date_Time_Reported;
    	$Rank = $request->Rank;
    	$Contact_Number = $request->Contact_Number;
    	$Medical_Officer = $request->Medical_Officer;
    	$Focal_Person_Name = $request->Focal_Person_Name;
    	$Signature = $request->Signature;
    	$Focal_Person_Number = $request->Focal_Person_Number;
    	Medical_Referrer::create(['Survivor_Code_Number'=>$Survivor_Code_Number, 'Medical_Doctor_Ref'=>$Medical_Doctor_Ref, 'WACPS'=>$WACPS, 'Victim_Name'=>$Victim_Name, 'Age'=>$Age, 'Tribe'=>$Tribe, 'Address'=>$Address, 'Incidenct_Summary'=>$Incidenct_Summary, 'Investigator_Name'=>$Investigator_Name, 'Date_Time_Reported'=>$Date_Time_Reported, 'Rank'=>$Rank, 'Contact_Number'=>$Contact_Number, 'Medical_Officer'=>$Medical_Officer, 'Focal_Person_Name'=>$Focal_Person_Name, 'Signature'=>$Signature, 'Focal_Person_Number'=>$Focal_Person_Number]);
			return('Form send successfully');
			//return view('Police.medical-referrer-update', compact('id'));
    }

    public function showReferrer(){
    	$medical_referrers = Medical_Referrer::all();
			return view('Reports.medical_referrers', compact('medical_referrers'));
		}
		
		public function EditReferrer($id){
			$medical_referrer = Medical_Referrer::find($id);
			return view('Police.medical-referrer-update', compact('id', 'medical_referrer'));
		}

		public function UpdateReferrer(Request $request, $id){
			$Survivor_Code_Number = $request->Survivor_Code_Number;
    	$Medical_Doctor_Ref = $request->Medical_Doctor_Ref;
    	$WACPS = $request->WACPS;
    	$Victim_Name = $request->Victim_Name;
    	$Age = $request->Age;
    	$Tribe = $request->Tribe;
    	$Address = $request->Address;
    	$Incidenct_Summary = $request->Incidenct_Summary;
    	$Investigator_Name = $request->Investigator_Name;
    	$Date_Time_Reported = $request->Date_Time_Reported;
    	$Rank = $request->Rank;
    	$Contact_Number = $request->Contact_Number;
    	$Medical_Officer = $request->Medical_Officer;
    	$Focal_Person_Name = $request->Focal_Person_Name;
    	$Signature = $request->Signature;
			$Focal_Person_Number = $request->Focal_Person_Number;
			$medical_referrer = Medical_Referrer::find($id);
    	$medical_referrer->update(['Survivor_Code_Number'=>$Survivor_Code_Number, 'Medical_Doctor_Ref'=>$Medical_Doctor_Ref, 'WACPS'=>$WACPS, 'Victim_Name'=>$Victim_Name, 'Age'=>$Age, 'Tribe'=>$Tribe, 'Address'=>$Address, 'Incidenct_Summary'=>$Incidenct_Summary, 'Investigator_Name'=>$Investigator_Name, 'Date_Time_Reported'=>$Date_Time_Reported, 'Rank'=>$Rank, 'Contact_Number'=>$Contact_Number, 'Medical_Officer'=>$Medical_Officer, 'Focal_Person_Name'=>$Focal_Person_Name, 'Signature'=>$Signature, 'Focal_Person_Number'=>$Focal_Person_Number]);
    	return redirect()->route('referrer.reports');
    }
		
    public function showInterviewForm(){
    	return view('Police.complainant-victim-interview');
    }

    public function addInterview(Request $request){
    $Case_Number = $request->Case_Number;
		$Date = $request->Date;
		$Complainant_Victim_Name = $request->Complainant_Victim_Name;
		$Age = $request->Age;
		$Sex = $request->Sex;
		$Tribe = $request->Tribe;
		$Address = $request->Address;
		$DOB = $request->DOB;
		$Birth_Place = $request->Birth_Place;
		$Nationality = $request->Nationality;
		$Height = $request->Height;
		$Weight = $request->Weight;
		$Complexion = $request->Complexion;
		$Physique = $request->Physique;
		$Contact_Number = $request->Contact_Number;
		$Father_Name = $request->Father_Name;
		$Father_Address = $request->Father_Address;
		$Mother_Name = $request->Mother_Name;
		$Mother_Address = $request->Mother_Address;
		$Interview = $request->Interview;
		$Occurrence = $request->Occurrence;
		$Occurrence_Date = $request->Occurrence_Date;
		$Free_Narrative = $request->Free_Narrative;
		$Investigator = $request->Investigator;
		$Victim_Sign = $request->Victim_Sign;
		Complainant_Victim_Interview::create(['Case_Number'=>$Case_Number,
		'Date'=>$Date, 'Complainant_Victim_Name'=>$Complainant_Victim_Name,
		'Age'=>$Age, 'Sex'=>$Sex, 'Tribe'=>$Tribe, 'Address'=>$Address,
		'DOB'=>$DOB, 'Birth_Place'=>$Birth_Place, 'Nationality'=>$Nationality,
		'Height'=>$Height, 'Weight'=>$Weight, 'Complexion'=>$Complexion,
		'Physique'=>$Physique, 'Contact_Number'=>$Contact_Number, 
		'Father_Name'=>$Father_Name, 'Father_Address'=>$Father_Address,
		'Mother_Name'=>$Mother_Name, 'Mother_Address'=>$Mother_Address,
		'Interview'=>$Interview, 'Occurrence'=>$Occurrence,
		'Occurrence_Date'=>$Occurrence_Date, 'Free_Narrative'=>$Free_Narrative,
		'Investigator'=>$Investigator, 'Victim_Sign'=>$Victim_Sign]);
		return redirect('/');
    }

    public function showInterview(){
    	$complainant_victim_interviews = Complainant_Victim_Interview::all();
    	return view('Reports.complainant_victim_interviews', compact('complainant_victim_interviews'));
    }

}
