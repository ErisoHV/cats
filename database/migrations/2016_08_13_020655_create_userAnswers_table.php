<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userAnswer', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

			//Question
			$table->integer('question_id')->unsigned();
			$table->foreign('question_id')->references('id')->on('question');

			//Answer
			$table->integer('option_id')->unsigned();
			$table->foreign('option_id')->references('id')->on('option');

			//User test
			$table->integer('userTest_id')->unsigned();
			$table->foreign('userTest_id')->references('id')->on('userTest');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('userAnswer');
    }
}
