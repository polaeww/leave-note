<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nick_name');
            $table->string('position');
            $table->date('start_work');
            $table->string('gender');
            $table->string('phone');
            $table->integer('user_types_id')->unsigned();
            $table->foreign('user_types_id')->references('id')->on('user_types');
            $table->integer('employee_type_id')->unsigned();
            $table->foreign('employee_type_id')->references('id')->on('employee_types');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
