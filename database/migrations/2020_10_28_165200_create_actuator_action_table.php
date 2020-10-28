<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActuatorActionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actuator_action', function (Blueprint $table) {
            $table->id();
            $table->integer('actuator_action_id');
            $table->foreingId('actuator_id')->nullable()->constrained('ignug.catalogues');
            $table->integer('time');
            $table->integer('action_way');
            $table->string('http', 100);
            $table->integer('email_sent');
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
        Schema::dropIfExists('actuator_action');
    }
}
