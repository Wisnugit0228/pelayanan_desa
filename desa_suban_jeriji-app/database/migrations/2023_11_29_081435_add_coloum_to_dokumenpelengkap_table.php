<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColoumToDokumenpelengkapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dokumenpelengkap', function (Blueprint $table) {
            $table->string('foto1')->after('foto')->nullable();
            $table->string('foto2')->after('foto1')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dokumenpelengkap', function (Blueprint $table) {
            $table->dropColumn('foto1');
            $table->dropColumn('foto2');
        });
    }
}
