<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeptOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dept_operations', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->timestamps();
          $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users');
          $table->double('value');
          $table->double('remain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dept_operations');
    }
}
