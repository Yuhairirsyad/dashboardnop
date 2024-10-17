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
        Schema::create('datachallenges', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_athlete');
            $table->bigInteger('id_kegiatan');
            $table->string('kegiatan');
            $table->text('distance');
            $table->string('kalori');
            $table->string('waktu');
            $table->enum('tipe', ['Run', 'Walk']);
            $table->string('tanggal_kegiatan');
            $table->string('tanggal_ambil');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datachallenges');
    }
};
