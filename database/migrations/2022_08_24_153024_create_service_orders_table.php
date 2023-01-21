<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('location')->nullable();
            $table->string('numberOfBathrooms')->nullable();
            $table->string('numberOfBedrooms')->nullable();
            $table->string('cleanType')->nullable();
            $table->string('recurring')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('address')->nullable();
            $table->string('apt')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('wayIn')->nullable();
            $table->string('addOne')->nullable();
            $table->string('havePets')->nullable();
            $table->string('note', 1000)->nullable();
            $table->string('status')->nullable();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('contactOption')->nullable();
            $table->string('option1')->nullable();
            $table->string('option2')->nullable();
            $table->boolean('isPaid')->nullable();
            $table->string('total')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('service_orders');
    }
}
