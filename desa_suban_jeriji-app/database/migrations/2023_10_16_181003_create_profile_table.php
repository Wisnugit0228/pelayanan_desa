<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->string('nama')->nullable();
            $table->string('nik')->nullable();
            $table->string('tempat')->nullable();
            $table->date('ttl')->nullable();
            $table->string('gender')->nullable();
            $table->string('agama')->nullable();
            $table->string('warga')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nikah')->nullable();
            $table->string('nohp')->nullable();
            $table->string('alamat')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('profile');
    }
}
