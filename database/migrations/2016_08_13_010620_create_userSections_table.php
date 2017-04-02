<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userSection', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->float('initialLevel')->default(0.0);

			//User
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('user');

			//Section
			$table->integer('section_id')->unsigned();
			$table->foreign('section_id')->references('id')->on('section');

			$table->unique(array('user_id','section_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('userSection');
    }
}
