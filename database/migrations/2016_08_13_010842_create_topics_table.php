<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('name', 200);
			$table->text('description')->nullable();
			
			//Subject
			$table->integer('subject_id')->unsigned();
			$table->foreign('subject_id')->references('id')->on('subject');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('topic');
    }
}
