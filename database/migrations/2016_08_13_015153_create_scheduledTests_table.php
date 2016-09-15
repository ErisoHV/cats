<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduledTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduledTest', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('name', 100);
			$table->text('description')->nullable();
			$table->date('dateTest');
			
			//Section
			$table->integer('section_id')->unsigned();
			$table->foreign('section_id')->references('id')->on('section');
			
			$table->unique(array('name','dateTest'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('scheduledTest');
    }
}
