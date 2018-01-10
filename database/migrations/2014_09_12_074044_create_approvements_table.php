<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reason');
            $table->string('approved');
            $table->integer('leave_notes_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('approvements', function($table) {
            $table->foreign('leave_notes_id')->references('id')->on('leave_notes');
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
