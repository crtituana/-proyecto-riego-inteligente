<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->nullable();
            $table->string('name', 50);
            $table->string('email', 100)->unique();
            $table->string('password', 50);
            $table->string('address_1', 100);
            $table->string('address_2', 100);
            $table->string('city', 100);
            $table->string('region', 100);
            $table->string('postal_code', 100);
            $table->integer('shipping_region_id');
            $table->string('mob_phone', 100);
            $table->integer('country_id');
            $table->integer('status_id')->comment('0=register, 1=verified')->nullable();
            $table->string('key', 20)->nullable();
            $table->timestamp('created_on');
            $table->string('domain', 400);
            $table->integer('time_zone');
            $table->smallInteger('attemps')->comment('umber of attempts password')->nullable();
            $table->timestamp('locked_on');
            $table->string('telegram_id', 100)->comment('telegram phone chat id');
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
        Schema::dropIfExists('customer');
    }
}
