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
        Schema::create('biaya_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('rincianProgram');
            $table->integer('volume');
            $table->string('satuan');
            $table->integer('hargaSatuan');
            $table->integer('total');
            $table->string('start');
            $table->string('finish'); 
            $table->unsignedBigInteger('biayaDosenGenre_id');
            $table->foreign('biayaDosenGenre_id')->references('id')->on('biaya_dosen_genre');
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
        Schema::dropIfExists('biaya_dosen');
    }
};
