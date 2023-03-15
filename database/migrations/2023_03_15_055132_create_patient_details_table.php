<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_details', function (Blueprint $table) {
            $table->string('patient_upi', 255);
            $table->string('patient_name', 255);
            $table->string('patient_mobile', 255);
            $table->string('patient_email', 255);
            $table->string('patient_country', 255);
            $table->string('patient_gender', 255);
            $table->string('patient_dob', 255);
            $table->string('patient_division', 255);
            $table->string('patient_district', 255);
            $table->string('patient_zipcode', 255);
            $table->string('patient_address', 255);
            $table->string('patient_police_station', 255);
            $table->string('patient_upazila', 255);
            $table->string('cb', 255)->nullable();
            $table->string('ub', 255)->nullable();
            $table->timestamps();
            
            $table->primary('patient_upi');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_details');
    }
}
