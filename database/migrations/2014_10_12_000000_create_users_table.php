<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
            $table->foreign('id')
                  ->references('id')
                  ->on('category')
                  ->onDelete('cascade');
            $table->string('fulname',30);
            $table->string('username',15)->primary();
            $table->string('password');
            $table->rememberToken();
            $table->string('email',30)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone',15);
            $table->string('location',30);
            DB::statement("ALTER TABLE users ADD profile_pict MEDIUMBLOB");
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
