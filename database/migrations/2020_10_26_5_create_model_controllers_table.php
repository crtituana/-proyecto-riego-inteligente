<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelControllersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_controllers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('controller_id')->references('id')->on('');
            $table->string('name', 50);
            $table->integer('nro_inputs')->nullable();
            $table->integer('nro_outputs')->nullable();
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
        Schema::dropIfExists('model_controllers');
    }
}
