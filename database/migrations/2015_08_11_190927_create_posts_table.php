<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id_post');
            $table->integer('id_comite');
            $table->integer('id_major');
            $table->string('title');
            $table->text('description');
            $table->date('date');
            $table->integer('id_type');
            $table->integer('duration')->nullable();
            $table->date('event_date')->nullable();
            $table->string('location')->nullable();
            $table->timeStamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
