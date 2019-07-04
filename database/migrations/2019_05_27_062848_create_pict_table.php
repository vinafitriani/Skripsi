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
            $table->increments('id')->unsigned();
            // $table->foreign('id')
            //       ->references('id')
            //       ->on('users')
            //       ->onDelete('cascade');
            $table->string('file_name');
            $table->string('client_file_name');
            $table->string('extension', 5);
            $table->unsignedInteger('size');
            $table->string('mime');
            $table->string('upload_by');
            $table->string('dir');
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
