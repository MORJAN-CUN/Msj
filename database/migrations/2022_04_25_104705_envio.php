<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Envio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_envios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario_remi');
            $table->string('tipo_envio');
            $table->string('sede_origen');
            $table->string('sede_destino')->nullable();
            $table->string('area_destino')->nullable();
            $table->string('destinatario');
            $table->integer('tele_destino');
            $table->string('dire_destino');
            $table->string('ciud_destino');
            $table->string('mail_destino')->nullable();
            $table->integer('largo')->nullable();
            $table->integer('ancho')->nullable();
            $table->integer('alto')->nullable();
            $table->integer('peso')->nullable();
            $table->integer('temperatura')->nullable();
            $table->string('desc_remitente')->nullable();
            $table->string('desc_destino')->nullable();
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
        Schema::dropIfExists('co_envios');
    }
}
