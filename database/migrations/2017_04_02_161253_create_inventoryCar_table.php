<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('inventory_cars');
        Schema::create('inventory_cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vin_no');
            $table->string('model');
            $table->string('make');
            $table->integer('year')->unsigned();
            $table->integer('mspr');
            $table->string('status');
            $table->boolean('booked');
            $table->boolean('listed');
            $table->timestamps();

            $table->unique('vin_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_cars');
    }
}
