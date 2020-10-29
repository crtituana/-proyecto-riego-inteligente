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
            $table->integer('sensor_id')->nullabe();
            $table->foreingId('customer_id')->references('customer_id')->nullabe();
            $table->foreingId('controller_id')->references('controller_id')->nullabe();
            $table->string('name', 50);
            $table->string('measure', 20);
            $table->string('api_key', 20);
            $table->integer('status')->comment('0: disable, 1:enable, 2: no data, 3:out range')->nullabe();
            $table->string('api_key_coded', 80);
            $table->smallInteger('email_notice')->comment('0: send emails, 1: not send email');
            $table->smallInteger('delete')->comment('0=normal, 1=deleted');
            $table->smallInteger('sensor_type')->comment('0: single value, 1: location');
            $table->string('min_value', 12)->comment('Not used in irrigation');
            $table->string('max_value', 12)->comment('Set point');
            $table->string('act_under_min_val', 30)->comment('actuator under set point');
            $table->string('act_over_max_val', 20)->comment('actuator over set poin');
            $table->string('sample_time', 12);
            $table->smallInteger('control')->comment('0: Automatic, 1:Manual');
            $table->string('intervalo', 12)->comment('Interval between sensor values');
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
