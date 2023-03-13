<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultastionAppointmentRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultastion_appointment_request', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appointment_requests_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('doctor_id');
            $table->string('consaltation_type', 255);
            $table->string('department_name', 255);
            $table->string('doctor_name', 255);
            $table->string('vc_link', 255);
            $table->string('cb', 255)->nullable();
            $table->timestamp('cd');
            $table->string('ub', 255)->nullable();
            $table->timestamp('ud');

            $table->foreign('appointment_requests_id')->references('id')->on('appointment_request_list');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultastion_appointment_request');
    }
}
