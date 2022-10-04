<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ciudades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TB_CIUDADES_', function (Blueprint $table) {
            $table->string('CIU_DPT_PAI_CODPAIS__');
            $table->string('CIU_DPT_CODDEPTO_');
            $table->string('CIU_CODCIU___');
            $table->string('CIU_CODUNI___');
            $table->string('CIU_NOMBRE___');
            $table->string('CIU_ESTADO___')->nullable();
            $table->string('CIU_USUCRE___')->nullable();
            $table->date('CIU_FECCRE___')->nullable();
            $table->string('CIU_USUMOD___')->nullable();
            $table->date('CIU_FECMOD___')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TB_CIUDADES_');
    }
}
