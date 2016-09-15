<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			
			//Resource
			$table->integer('resource_id')->unsigned();
			$table->foreign('resource_id')->references('id')->on('resource');
			
			//UserTest
			$table->integer('userTest_id')->unsigned();
			$table->foreign('userTest_id')->references('id')->on('userTest');
			
			$table->index('resource_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('feedbacks');
    }
}
