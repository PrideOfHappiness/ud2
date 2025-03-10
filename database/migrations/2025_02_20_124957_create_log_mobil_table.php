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
        Schema::create('log_mobil', function (Blueprint $table) {
            $table->uuid('logMobilID')->primary();
            $table->string('idMobil', 10);
            $table->string('idUser', 10);
            $table->text('keterangan');
            $table->string('norec', 50);
            $table->timestamps();

            $table->foreign('idUser')->references('userID')->on('users')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('idMobil')->references('mobilID')->on('mobil')->onDelete('no action')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_mobil');
    }
};
