<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceAppointmentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_appointment_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appointment_requests_id');
            $table->string('service_type', 255);
            $table->string('home_sample_collection_address', 255);
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
        Schema::dropIfExists('service_appointment_requests');
    }
}
