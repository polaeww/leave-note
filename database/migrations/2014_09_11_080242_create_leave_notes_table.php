<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->integer('total_house');
            $table->string('reason');
            $table->string('note');
            $table->date('approve_date');
            $table->string('approve_by');
            $table->string('approve_reason');
            $table->integer('leave_types_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('leave_lengths_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('leave_notes', function($table) {
            $table->foreign('leave_types_id')->references('id')->on('leave_types');
        });

        Schema::table('leave_notes', function($table) {
            $table->foreign('users_id')->references('id')->on('users');
        });

        Schema::table('leave_notes', function($table) {
            $table->foreign('leave_lengths_id')->references('id')->on('leave_lengths');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
