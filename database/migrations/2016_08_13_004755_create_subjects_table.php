<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('name',250);
			$table->text('description')->nullable()->default(null);
			$table->integer('sectionsNo');
			$table->boolean('isActive');
			
			//Subject Configuration
			$table->boolean('isConfiguredSubject')->default(0);
			$table->boolean('isConfiguredQuestions')->default(0);
			$table->boolean('isConfiguredConcepts')->default(0);
			$table->boolean('isConfiguredTopics')->default(0);
			$table->boolean('isConfiguredPreTest')->default(0);
			
			//Indexes
			$table->unique('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subject');
    }
}
