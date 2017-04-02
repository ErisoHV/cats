<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->text('question');
			$table->float('b')->comment('Difficulty parameter');
			$table->text('feedback')->nullable()->default(null);
			
			$table->boolean('isActive');
			$table->boolean('isConfigured');
			$table->boolean('isSectionSpecific');
			$table->boolean('isPreTest');
			
			//QuestionTypes
			$table->integer('questionType_id')->unsigned();
			$table->foreign('questionType_id')->references('id')->on('questionType');
			
			//Created By
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('user');
			
			$table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('question');
    }
}
