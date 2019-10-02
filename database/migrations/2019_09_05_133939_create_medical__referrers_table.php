<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalReferrersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical__referrers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Survivor_Code_Number');
            $table->string('Medical_Doctor_Ref');
            $table->string('WACPS');
            $table->string('Victim_Name');
            $table->string('Age');
            $table->string('Tribe');
            $table->string('Address');
            $table->longText('Incidenct_Summary');
            $table->string('Investigator_Name');
            $table->string('Date_Time_Reported');
            $table->string('Rank');
            $table->string('Contact_Number');
            $table->longText('Medical_Officer');
            $table->string('Focal_Person_Name');
            $table->string('Signature');
            $table->string('Focal_Person_Number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical__referrers');
    }
}
