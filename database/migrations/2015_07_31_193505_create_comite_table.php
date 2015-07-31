<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comite', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('type_id');
            $table->integer('president_id');
            $table->integer('vicepresident_id');
            $table->integer('secretary_id');
            $table->integer('vocal_id');
            $table->integer('treasurer_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comite');
    }
}
