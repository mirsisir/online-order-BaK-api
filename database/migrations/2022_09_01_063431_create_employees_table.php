<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 255)->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('JobPosition')->nullable();
            $table->string('TimeOFWorking')->nullable();
            $table->string('Smartphone')->nullable();
            $table->string('languages')->nullable();
            $table->string('allergies')->nullable();
            $table->string('IsExperienceCleaning')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
