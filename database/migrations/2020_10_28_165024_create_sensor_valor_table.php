<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorValorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensor_valor', function (Blueprint $table) {
            $table->id();
            $table->integer('sensor_valor_id')->nullable();
            $table->foreingId('sensor_id')->references('sensor_id')->nullabe();
            $table->float('valor')->nullabe();
            $table->integer('tiempo')->nullabe();
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
        Schema::dropIfExists('sensor_valor');
    }
}
