<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testConcept', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->float('conceptLevel')->default(0.0);
			
			//Concept
			$table->integer('concept_id')->unsigned();
			$table->foreign('concept_id')->references('id')->on('concept');
			
			//User test
			$table->integer('userTest_id')->unsigned();
			$table->foreign('userTest_id')->references('id')->on('userTest');
			
			$table->unique('concept_id','userTest_id');
			$table->index('concept_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('testConcept');
    }
}
