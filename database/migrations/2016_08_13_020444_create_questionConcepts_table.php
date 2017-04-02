<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionConcept', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			
			//Question
			$table->integer('question_id')->unsigned();
			$table->foreign('question_id')->references('id')->on('question');
			
			//Concept
			$table->integer('concept_id')->unsigned();
			$table->foreign('concept_id')->references('id')->on('concept');
			
			$table->unique(array('question_id','concept_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questionConcept');
    }
}
