<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Abuses')->nullable();
            $table->string('Types_Abuse')->nullable();
            $table->string('Possible_Indicators')->nullable();
            $table->string('Child_Name');
            $table->string('Birthdate');
            $table->string('Child_Address')->nullable();
            $table->string('Contact_Number');
            $table->string('Ethnicity');
            $table->string('Parents_Names');
            $table->string('Alleged_Perpetrators_Name');
            $table->string('Child_Whereabouts');
            $table->string('Next_contact');
            $table->string('Court_Orders');
            $table->string('Notifier_Fullname');
            $table->string('Job_Title');
            $table->string('Notifier_Address');
            $table->string('Notifier_Contact');
            $table->string('Relationship');
            $table->string('Contact_Family');
            $table->string('Working_Child');
            $table->longText('Caregivers_Aware');
            $table->longText('Expection_Child');
            $table->longText('Action_Expecting');
            $table->longText('Action_Taken');
            $table->longText('Impact_Made');
            $table->longText('Disclose');
            $table->longText('Who');
            $table->longText('Injuries');
            $table->longText('Doctor');
            $table->longText('Police');
            $table->longText('Concerns');
            $table->longText('Caregivers_Protective');
            $table->longText('Caregiver_Behaviour');
            $table->longText('Child_Behaviour');
            $table->string('Family_Historys');
            $table->longText('What_Prompted');
            $table->longText('Report_Made');
            $table->longText('Child_Aware');
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
        Schema::dropIfExists('abuses');
    }
}
