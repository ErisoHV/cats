<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resourceConcept', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			
			//Resource
			$table->integer('resource_id')->unsigned();
			$table->foreign('resource_id')->references('id')->on('resource');
			
			//Concept
			$table->integer('concept_id')->unsigned();
			$table->foreign('concept_id')->references('id')->on('concept');
			
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
        Schema::drop('resourceConcept');
    }
}
