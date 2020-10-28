<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActuatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actuator', function (Blueprint $table) {
            $table->id();
            $table->integer('actuator_id');
            $table->integer('customer_id');
            $table->string('name', 50);
            $table->string('api_key', 20);
            $table->integer('status');
            $table->integer('email_notice');
            $table->integer('deleted');
            $table->string('ip_or_domaine', 40);
            $table->string('start_hour', 5);
            $table->integer('action');
            $table->integer('sunday');
            $table->integer('monday');
            $table->integer('tuesday');
            $table->integer('wednesday');
            $table->integer('thursday');
            $table->integer('saturday');
            $table->integer('control');
            $table->string('port', 5);
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
        Schema::dropIfExists('actuator');
    }
}
