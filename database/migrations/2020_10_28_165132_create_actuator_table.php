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
            $table->foreingId('actuator_id')->references('controller_id')->nullabe();
            $table->foreingId('customer_id')->references('customer_id')->nullabe();
            $table->foreingId('controller_id');
            $table->string('name', 50);
            $table->string('api_key', 20);
            $table->integer('status')->comment('enable (0=OFF, 1=ON), disable=2')->nullable();
            $table->smallInteger('email_notice')->comment('0: send emails, 1: not send email')->nullable();
            $table->smallInteger('deleted')->comment('0:normal, 1:deleted')->nullable();
            $table->string('ip_or_domaine', 40);
            $table->string('start_hour', 5);
            $table->smallInteger('action')->comment('0: OFF, 1:ON');
            $table->smallInteger('sunday')->comment('enable, 0:disable');
            $table->smallInteger('monday')->comment('enable, 0:disable');
            $table->smallInteger('tuesday')->comment('enable, 0:disable');
            $table->smallInteger('wednesday')->comment('enable, 0:disable');
            $table->smallInteger('thursday')->comment('enable, 0:disable');
            $table->smallInteger('saturday')->comment('enable, 0:disable');
            $table->smallInteger('friday')->comment('enable, 0:disable');
            $table->smallInteger('control')->comment('0: Automatic, 1:Manual');
            $table->string('port', 5);
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
