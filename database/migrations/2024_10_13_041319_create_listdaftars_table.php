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
        Schema::create('list_daftar', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_athlete')->unique();
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');
            $table->text('refresh_token');
            $table->text('access_token');
            $table->text('foto_profil');
            $table->string('area')->nullable();;
            $table->string('grup')->nullable();;
            $table->string('warna');
            $table->string('tgl_register');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listdaftars');
    }
};
