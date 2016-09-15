<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduledTestTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduledTestTopic', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			
			//Scheduled test
			$table->integer('scheduledTest_id')->unsigned();
			$table->foreign('scheduledTest_id')->references('id')->on('scheduledTest');
			
			//Topic
			$table->integer('topic_id')->unsigned();
			$table->foreign('topic_id')->references('id')->on('topic');
			
			$table->unique(array('scheduledTest_id', 'topic_id'));
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('scheduledTestTopics');
    }
}
