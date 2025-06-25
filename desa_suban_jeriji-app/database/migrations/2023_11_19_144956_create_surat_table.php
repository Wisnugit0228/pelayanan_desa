<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('no')->nullable();
            $table->string('nomor')->nullable();
            $table->string('jenis');
            $table->string('status');
            $table->string('note')->nullable();
            $table->string('nama');
            $table->string('nik')->nullable();
            $table->string('tempat');
            $table->string('ttl');
            $table->string('gender');
            $table->string('kerja')->nullable();
            $table->string('warga');
            $table->string('agama');
            $table->string('nikah')->nullable();
            $table->string('alamat');

            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat');
    }
}
