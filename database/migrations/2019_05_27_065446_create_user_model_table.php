<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_model', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id')
                  ->references('id')
                  ->on('category')
                  ->onDelete('cascade');
            $table->string('username',15);
            $table->foreign('username')
                  ->references('username')
                  ->on('user')
                  ->onDelete('cascade');
            $table->string('gender');
            $table->integer('height');
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
        Schema::dropIfExists('user_model');
    }
}
