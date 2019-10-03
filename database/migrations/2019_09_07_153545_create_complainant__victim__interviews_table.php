<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainantVictimInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complainant_victim_interviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Case_Number');
            $table->string('Date');
            $table->string('Complainant_Victim_Name');
            $table->string('Age');
            $table->string('Sex');
            $table->string('Tribe');
            $table->string('Address');
            $table->string('DOB');
            $table->string('Birth_Place');
            $table->string('Nationality');
            $table->string('Height');
            $table->string('Weight');
            $table->string('Complexion');
            $table->string('Physique');
            $table->string('Contact_Number');
            $table->string('Father_Name');
            $table->string('Father_Address');
            $table->string('Mother_Name');
            $table->string('Mother_Address');
            $table->string('Interview');
            $table->string('Occurrence');
            $table->string('Occurrence_Date');
            $table->longText('Free_Narrative');
            $table->string('Investigator');
            $table->string('Victim_Sign');
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
        Schema::dropIfExists('complainant_victim_interviews');
    }
}

