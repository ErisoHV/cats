<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resourceTopic', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

			//Resource
			$table->integer('resource_id')->unsigned();
			$table->foreign('resource_id')->references('id')->on('resource');

			//Topic
			$table->integer('topic_id')->unsigned();
			$table->foreign('topic_id')->references('id')->on('topic');

			$table->index('topic_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resourceTopic');
    }
}
