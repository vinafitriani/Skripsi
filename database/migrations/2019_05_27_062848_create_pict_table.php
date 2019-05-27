<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pict', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id')
                  ->references('id')
                  ->on('user')
                  ->onDelete('cascade');
            $table->binary('portfolio');
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
        Schema::dropIfExists('pict');
    }
}
