<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenpelengkapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumenpelengkap', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('foto')->nullable();
            $table->string('namausaha')->nullable();
            $table->string('jenisusaha')->nullable();
            $table->string('mulaiusaha')->nullable();
            $table->string('alamatusaha')->nullable();
            $table->string('namaayah')->nullable();
            $table->string('namaibu')->nullable();
            $table->string('statusnikah')->nullable();
            $table->string('ket')->nullable();

            $table->unsignedBigInteger('surat_id');
            $table->foreign('surat_id')->references('id')->on('surat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokumenpelengkap');
    }
}
