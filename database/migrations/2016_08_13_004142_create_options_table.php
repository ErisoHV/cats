<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('option', function (Blueprint $table) {
              $table->increments('id');
              $table->timestamps();

              $table->text('option');
        			$table->boolean('isCorrect');

        			//Question
        			$table->integer('question_id')->unsigned();
        			$table->foreign('question_id')->references('id')->on('question');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('option');
    }
}
