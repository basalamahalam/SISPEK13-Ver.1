<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id('id_anggota');

            $table->unsignedBigInteger('id_angkatan');
            $table->unsignedBigInteger('id_kelas');
            $table->unsignedBigInteger('id_divisi');
            $table->unsignedBigInteger('id_jabatan');
            $table->unsignedBigInteger('id_organisasi');

            $table->string("nama_anggota");
            $table->string("instagram_anggota");
            $table->string("gambar_anggota")->nullable();
            $table->timestamp("publish_at")->nullable();
            $table->timestamps();

            $table->foreign('id_kelas')->references('id_kelas')->on('kelas');
            $table->foreign('id_angkatan')->references('id_angkatan')->on('angkatans');
            $table->foreign('id_divisi')->references('id_divisi')->on('divisis');
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatans');
            $table->foreign('id_organisasi')->references('id_organisasi')->on('organisasis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
}
