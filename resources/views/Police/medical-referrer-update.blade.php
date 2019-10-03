@extends('layouts.master')

@section('main')

<!-- ================ Add form ==================== -->
    <div class="row mb-5">
        <div class="container">
            <div class="card-deck">
                <form action="{{route('referrer.update', $id)}}" method="post">
                    <div class="form-group">
                    {{csrf_field()}}
                    {{method_field ('PUT')}}
                    <h3 class="h3 text-center my-2">MEDICAL REPORT FORM</h3><hr>
                      <b><label>Survior Code Number:</label></b><input type="text" placeholder="Enter Survivor Code Number Here"  name="Survivor_Code_Number" value="{{$medical_referrer->Survivor_Code_Number}}"> <br /> <br>
                      <b><label>Medical Doctor/ Ref. Section Diary Number:</label></b><input type="text" placeholder="Enter Medical Doctor Ref. Station Diary Here" name="Medical_Doctor_Ref" value="{{$medical_referrer->Medical_Doctor_Ref}}"><br /> <br>
                      <b><label>Women  & Childeren Protection Section (WACPS):</label></b><input type="text" placeholder="Enter Women and Childern Protection Section (WACPS) Here"  name="WACPS" value="{{$medical_referrer->WACPS}}"> <br /> <br>
                      <b><label>Victim Name:</label></b><input type="text" placeholder="Enter Victim Name Here" name="Victim_Name" value="{{$medical_referrer->Victim_Name}}">
                      <b><label>Age:</label></b><input type="data-target" placeholder="Enter Age Here" name="Age" value="{{$medical_referrer->Age}}">
                      <b><label>Tribe:</label></b><input type="text" placeholder="Enter Tribe Here"  name="Tribe" value="{{$medical_referrer->Tribe}}"> <br /> <br>
                      <b><label>Address:</label></b><input type="text" placeholder="Enter Address Here" name="Address" value="{{$medical_referrer->Address}}"> <br /> <br>
                      <h4 class="h4 text-center my-2">Brief Summary of Incident</h4><hr>
                      <textarea placeholder="Enter Incidenct Brief Summary Here"  name="Incidenct_Summary" rows="5" cols="150">{{$medical_referrer->Incidenct_Summary}}</textarea> <br /> <br>
                      <b><label>Investigator's Name:</label></b><input placeholder="Enter Investigator Name Here" name="Investigator_Name" value="{{$medical_referrer->Investigator_Name}}">
                      <b><label>Date & Time Reported</label></b><input placeholder="Enter Date Time Reported Here" name="Date_Time_Reported" value="{{$medical_referrer->Date_Time_Reported}}"> <br /> <br>
                      <b><label>Rank:</label></b><input placeholder="Enter Rank Here" name="Rank" value="{{$medical_referrer->Rank}}"> <br /> <br>
                      <b><label>Contact Number:</label></b><input placeholder="Enter Contact Number Here"  name="Contact_Number" value="{{$medical_referrer->Contact_Number}}">
                      <h3 class="h3 text-center my-2">MEDICAL OFFICER'S REMARKS</h3><hr>
                      <textarea placeholder="Enter Medical Officer Remarks Here"  name="Medical_Officer" rows="5" cols="150">{{$medical_referrer->Medical_Officer}}</textarea> <br /> <br>
                      <b><label>Focal Person/OIC Name:</label></b><input placeholder="Enter Focal Person/OIC Name Here" name="Focal_Person_Name" value="{{$medical_referrer->Focal_Person_Name}}">
                      <b><label>Focal Person/OIC Signature:</label></b><input placeholder="Enter Focal Person/OIC Signature Here" name="Signature" value="{{$medical_referrer->Signature}}"><br /> <br>
                      <b><label>Contact Number:</label></b><input placeholder="Enter Contact Number" name="Focal_Person_Number" value="{{$medical_referrer->Focal_Person_Number}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Sent Form</button>
                </div>
              </form>
            </div>
        </div>
    </div>


 <!-- FOOTER -->
@endsection
