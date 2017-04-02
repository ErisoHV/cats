<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testTopic', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->float('topicLevel')->default(0.0);
			
			//Topic
			$table->integer('topic_id')->unsigned();
			$table->foreign('topic_id')->references('id')->on('topic');
			
			//User test
			$table->integer('userTest_id')->unsigned();
			$table->foreign('userTest_id')->references('id')->on('userTest');
			
			$table->unique(array('topic_id','userTest_id'));
			$table->index('topic_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('testTopic');
    }
}
