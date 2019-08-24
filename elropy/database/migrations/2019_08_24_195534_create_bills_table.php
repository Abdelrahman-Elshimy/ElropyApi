<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->timestamps();
          $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users');
          $table->double('value');
          $table->double('buyed');
          $table->double('depts_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
