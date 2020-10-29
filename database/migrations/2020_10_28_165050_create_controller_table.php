<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControllerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controller', function (Blueprint $table) {
            $table->id();
            $table->foreingId('controller_id')->nullabe();
            $table->foreingId('customer_id')->references('customer_id')->nullabe();
            $table->foreingId('model_id')->references('model_id')->nullabe();
            $table->string('name', 50);
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
        Schema::dropIfExists('controller');
    }
}
