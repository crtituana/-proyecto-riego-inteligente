<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensor', function (Blueprint $table) {
            $table->id();
            $table->integer('sensor_id');
            $table->integer('customer_id');
            $table->string('name', 50);
            $table->string('measure', 20);
            $table->string('api_key', 20);
            $table->string('api_key_coded', 80);
            $table->integer('email_notice');
            $table->integer('delete');
            $table->integer('sensor_type');
            $table->string('min_value', 12);
            $table->string('max_value', 12);
            $table->string('act_under_min_val', 30);
            $table->string('act_over_max_val', 20);
            $table->string('sample_time', 12);
            $table->integer('control');
            $table->string('intervalo', 12);
            $table->integer('controller_id');
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
        Schema::dropIfExists('sensor');
    }
}
