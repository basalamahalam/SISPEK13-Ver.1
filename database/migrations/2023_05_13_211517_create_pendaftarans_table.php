<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('pendaftaran');
            $table->string('email');
            $table->string('nama');
            $table->string('kelas');
            $table->string('gender');
            $table->string('contact');
            $table->string('pict_personal');
            $table->text('about');
            $table->text('reason');
            $table->timestamp('created_sign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
