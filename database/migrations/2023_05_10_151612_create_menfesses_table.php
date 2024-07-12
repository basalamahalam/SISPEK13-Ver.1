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
        Schema::create('menfesses', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('to');
            $table->string('message');
            // $table->text('message');
            $table->integer('status')->default(0);
            $table->timestamp('submit_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menfesses');
    }
};
