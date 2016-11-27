<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userTest', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('questionsNo');
			$table->dateTime('date')->useCurrent = true;
			$table->boolean('isSuggested');
			$table->float('knowledgeLevel')->default(0.0);

			//User
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('user');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('userTest');
    }
}
