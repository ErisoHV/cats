<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concept', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('name', 200);
			$table->text('description')->nullable();
			
			//Topic
			$table->integer('topic_id')->unsigned();
			$table->foreign('topic_id')->references('id')->on('topic');
			
			$table->unique(array('topic_id','name'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('concept');
    }
}
