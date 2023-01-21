<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_contents', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('questions')->nullable();
            $table->text('answer')->nullable();
            $table->integer('FaqCategory_id')->unsigned()->nullable()->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('faq_contents');
    }
}
