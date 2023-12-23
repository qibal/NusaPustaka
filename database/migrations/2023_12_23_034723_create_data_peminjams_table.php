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
        Schema::create('data_peminjams', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mahasiswa');
            $table->string('nama_mahasiswa');
            $table->integer('id_prodi');
            $table->string('nama_prodi');
            $table->integer('id_fakultas');
            $table->string('nama_fakultas');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
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
        Schema::dropIfExists('data_peminjams');
    }
};
