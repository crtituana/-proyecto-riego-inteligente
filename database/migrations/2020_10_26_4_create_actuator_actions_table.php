<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActuatorActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actuator_actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('actuator_id')->references('id')->on('actuator');
            $table->integer('time')->nullabe();
            $table->smallInteger('action_way')->comment('0: Manual, 1: Automatic')->nullabe();
            $table->string('http', 100);
            $table->smallInteger('email_sent')->comment('0: not sent, 1: sent')->nullabe();
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
        Schema::dropIfExists('actuator_actions');
    }
}
