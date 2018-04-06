<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWomensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('womens', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('email');
            $table->dateTime('due_date');
            $table->dateTime('date_of_birth');
            $table->integer('preg_no');
            $table->integer('days');
            $table->integer('flag');
            $table->integer('rate');
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
        Schema::dropIfExists('womens');
    }
}
