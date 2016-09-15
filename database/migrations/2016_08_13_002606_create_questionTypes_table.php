<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionType', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('name', 100);
			$table->text('description')->nullable()->default(null);
			$table->integer('maxAnswerNo');
			
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
        Schema::drop('questionType');
    }
}
