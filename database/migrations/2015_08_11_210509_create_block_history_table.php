<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_history', function (Blueprint $table) {
            $table->increments('id_block');
            $table->integer('id_student');
            $table->integer('id_comite');
            $table->dateTime('time');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('comment');
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
        Schema::drop('block_history');
    }
}
