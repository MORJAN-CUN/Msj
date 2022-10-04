<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Areas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_areas', function (Blueprint $table) {
            $table->id();
            $table->string('COD_AREA')->nullable();
            $table->string('NOMBRE')->nullable();
            $table->string('COD_SEDE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co_areas');
    }
}
