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
            $table->date('date_start');
            $table->date('date_end');
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->integer('total_hour');
            $table->string('reason');
            $table->string('note')->nullable();
            $table->string('document')->nullable();
            $table->string('admin_approve')->nullable();
            $table->string('admin_reason')->nullable();
            $table->string('leader_approve')->nullable();
            $table->string('leader_reason')->nullable();
            $table->string('director_approve')->nullable();
            $table->string('director_reason')->nullable();
            $table->integer('leave_types_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('leave_lengths_id')->unsigned();
            $table->integer('approvements_id')->unsigned();
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

        Schema::table('leave_notes', function($table) {
            $table->foreign('approvements_id')->references('id')->on('approvements');
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
