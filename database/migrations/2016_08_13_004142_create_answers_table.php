<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->text('answer');
			$table->boolean('isCorrect');
			
			//Question
			$table->integer('question_id')->unsigned();
			$table->foreign('question_id')->references('id')->on('question');
			
			//$table->unique(array('question_id','answer'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answer');
    }
}
