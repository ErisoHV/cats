<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionTopic', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			
			//Question
			$table->integer('question_id')->unsigned();
			$table->foreign('question_id')->references('id')->on('question');
			
			//Topic
			$table->integer('topic_id')->unsigned();
			$table->foreign('topic_id')->references('id')->on('topic');
			
			$table->unique(array('question_id','topic_id'));
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questionTopic');
    }
}
