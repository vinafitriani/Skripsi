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
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')
                  ->references('id')
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
