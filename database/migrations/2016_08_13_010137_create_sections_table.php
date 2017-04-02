<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('section');
			$table->text('description')->nullable();

			//Subject
			$table->integer('subject_id')->unsigned();
			$table->foreign('subject_id')->references('id')->on('subject');

      //User (Teacher)
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
        Schema::drop('section');
    }
}
