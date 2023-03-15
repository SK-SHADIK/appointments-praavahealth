<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('corporate_name_id');
            $table->unsignedBigInteger('bill_type_id');
            $table->string('service_price', 255);
            $table->string('promo_code', 255);
            $table->string('cb', 255)->nullable();
            $table->timestamp('cd')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('ub', 255)->nullable();
            $table->timestamp('ud')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('corporate_name_id')->references('id')->on('corporate_name');
            $table->foreign('bill_type_id')->references('id')->on('corporate_bill_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corporate_appointments');
    }
}
