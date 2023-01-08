<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji_tenaga_kependidikan_genre', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mataAnggaranB');
            $table->string('namaAnggaranB');
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
        Schema::dropIfExists('gaji_tenaga_kependidikan_genre');
    }
};
