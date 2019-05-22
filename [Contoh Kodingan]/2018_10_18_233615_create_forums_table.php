<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		// Bikin tabel namanya 'forums'
        Schema::create('forums', function (Blueprint $table) {
			// Kolom ID dibuat auto increment dan primary key
            $table->increments('id');
			// $table->text('nama kolom') bakal umum dipakai. Baca lagi dari sumber lain kalo mau tau tipe data yang lain cara deklarasinya gimana
            $table->text('title');
            $table->text('description');
			// Kolom 'user_id' isinya cuma boleh bilangan integer positif, supaya bisa dipasangkan foreign key
            $table->integer('user_id')->unsigned();
            $table->longText('first_post');
			// Otomatis buat timestamps bawaan Laravel
            $table->timestamps();

			// Jadikan kolom 'user_id' sebagai foreign key, temannya kolom id dari tabel 'users'
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
			->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
	 
	// Fungsi down harus ada, apapun yang terjadi supaya migrasi bisa berjalan. Isinya cuma begini aja
    public function down()
    {
        Schema::dropIfExists('forums');
    }
}
