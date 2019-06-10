<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->foreign('id')
            //       ->references('id')
            //       ->on('category')
            //       ->onDelete('cascade');
            $table->string('fullname',30);
            $table->string('username',15)->unique();
            $table->string('password',15);
            $table->rememberToken();
            $table->string('email', 30)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone',15)->nullable();
            $table->string('location',50);
            $table->binary('profile_pict')->nullable();
            $table->string('category',20);
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
