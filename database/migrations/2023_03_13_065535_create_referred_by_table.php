<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferredByTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referred_by', function (Blueprint $table) {
            $table->id();
            $table->string('referred_by', 255);
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
        Schema::dropIfExists('referred_by');
    }
}
