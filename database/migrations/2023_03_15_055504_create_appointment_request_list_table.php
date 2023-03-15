<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentRequestListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_request_list', function (Blueprint $table) {
            $table->id();
            $table->string('patient_upi', 255)->nullable();
            $table->string('appointment_type', 255)->nullable();
            $table->timestamp('appointment_date');
            $table->unsignedBigInteger('status')->nullable();
            $table->text('remarks')->nullable();
            $table->text('token')->nullable();
            $table->string('appointment_time', 255)->nullable();
            $table->unsignedBigInteger('confirmation_call_status');
            $table->unsignedBigInteger('payment_status');
            $table->unsignedBigInteger('invoice_status');
            $table->unsignedBigInteger('request_source_id')->nullable();
            $table->string('access_token_id', 255)->nullable();
            $table->unsignedBigInteger('cancellation_reason_id')->nullable();
            $table->unsignedBigInteger('referred_by_id')->nullable();
            $table->unsignedBigInteger('corporate_appointment_id')->nullable();
            $table->unsignedBigInteger('client_type')->nullable();
            $table->string('cb', 255)->nullable();
            $table->string('ub', 255)->nullable();
            $table->timestamps();


            $table->foreign('confirmation_call_status')->references('id')->on('confirmation_call');
            $table->foreign('payment_status')->references('id')->on('payment_status');
            $table->foreign('invoice_status')->references('id')->on('invoice_status');
            $table->foreign('request_source_id')->references('id')->on('request_source');
            $table->foreign('cancellation_reason_id')->references('id')->on('cancellation_reasons');
            $table->foreign('referred_by_id')->references('id')->on('referred_by');
            $table->foreign('corporate_appointment_id')->references('id')->on('corporate_appointments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_request_list');
    }
}
