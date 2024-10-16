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
        Schema::create('data_challenges', function (Blueprint $table) {
            $table->id();
            $table->string('id_athlete');
            $table->string('id_kegiatan');
            $table->string('kegiatan');
            $table->text('distance');
            $table->string('kalori');
            $table->string('waktu');
            $table->string('tipe');
            $table->string('tanggal_kegiatan');
            $table->string('tanggal_ambil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_challenges');
    }
};
