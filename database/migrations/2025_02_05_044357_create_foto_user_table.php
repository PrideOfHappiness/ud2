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
        Schema::create('foto_user', function (Blueprint $table) {
            $table->string('fotoUserID', 10)->primary();
            $table->string('idUser', 10);
            $table->string('namaFile');
            $table->timestamps();

            $table->foreign('idUser')->references('userID')->on('users')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_user');
    }
};
