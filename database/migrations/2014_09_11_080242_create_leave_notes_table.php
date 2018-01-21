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
            $table->string('reason')->nullable();
            $table->string('note')->nullable();
            $table->string('document')->nullable();

            $table->string('admin_id')->nullable();
            $table->string('admin_reason')->nullable();
            $table->boolean('admin_approved')->default(false);

            $table->string('leader_id')->nullable();
            $table->string('leader_reason')->nullable();
            $table->boolean('leader_approved')->default(false);

            $table->string('director_id')->nullable();
            $table->string('director_reason')->nullable();
            $table->boolean('director_approved')->default(false);

            $table->integer('leave_type_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('leave_length_type_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('leave_notes', function ($table) {
            $table->foreign('leave_type_id')->references('id')->on('leave_types');
        });

        Schema::table('leave_notes', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('leave_notes', function ($table) {
            $table->foreign('leave_length_type_id')->references('id')->on('leave_length_types');
        });

        // Schema::table('leave_notes', function ($table) {
        //     $table->foreign('approvements_id')->references('id')->on('approvements');
        // });

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
