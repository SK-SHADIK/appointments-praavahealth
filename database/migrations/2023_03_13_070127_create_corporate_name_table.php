<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateNameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_name', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('cb', 255)->nullable();
            $table->timestamp('cd');
            $table->string('ub', 255)->nullable();
            $table->timestamp('ud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corporate_name');
    }
}
