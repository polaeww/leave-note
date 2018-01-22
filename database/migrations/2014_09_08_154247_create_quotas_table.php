<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->integer('sick_leave');
            $table->integer('business_leave');
            $table->integer('vacation_leave');
            $table->integer('maternity_leave');
            $table->integer('ordination_leave');
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
        //
    }
}
