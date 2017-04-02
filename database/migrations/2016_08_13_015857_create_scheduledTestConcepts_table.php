<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduledTestConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduledTestConcept', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			
			//Scheduled test
			$table->integer('scheduledTest_id')->unsigned();
			$table->foreign('scheduledTest_id')->references('id')->on('scheduledTest');
			
			//Concept
			$table->integer('concept_id')->unsigned();
			$table->foreign('concept_id')->references('id')->on('concept');
			
			$table->unique(array('scheduledTest_id','concept_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('scheduledTestConcept');
    }
}
