<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sedes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_sedes', function (Blueprint $table) {
            $table->id();
            $table->string('COD_SEDE')->nullable();
            $table->string('NIT')->nullable();
            $table->string('NOMBRE')->nullable();
            $table->string('INICIALES')->nullable();
            $table->string('COD_SGSSS')->nullable();
            $table->string('NOMCORTOCIA')->nullable();
            $table->string('NOMLARGOCIA')->nullable();
            $table->string('COD_MUNICIPIO')->nullable();
            $table->string('DIRECCION1')->nullable();
            $table->string('DIRECCION2')->nullable();
            $table->string('TELEFONO1')->nullable();
            $table->string('TELEFONO2')->nullable();
            $table->string('COD_CIUD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co_sedes');
    }
}
