<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->string('subject',30);
            $table->string('name',15);
            $table->date('date_event');
            $table->string('location_event',50);
            $table->longText('description');
            $table->binary('pict_event');
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
        Schema::dropIfExists('event');
    }
}
