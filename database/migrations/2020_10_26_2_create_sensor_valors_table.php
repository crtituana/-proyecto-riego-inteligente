<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorValorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensor_valors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sensor_valor_id')->references('id')->on('');
            $table->integer('sensor_id')->references('id')->on('sensor');
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
        Schema::dropIfExists('sensor_valors');
    }
}
