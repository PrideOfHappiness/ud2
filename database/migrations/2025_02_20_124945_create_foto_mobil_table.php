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
        Schema::create('foto_mobil', function (Blueprint $table) {
            $table->string('foto_mobilID', 10)->primary();
            $table->string('idMobil', 10);
            $table->string('idKomparasi', 10)->nullable();
            $table->integer('part');
            $table->string('stringGabungan', 20);
            $table->timestamps();

            $table->foreign('idKomparasi')->references('komparasiID')->on('komparasi')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('idMobil')->references('mobilID')->on('mobil')->onDelete('no action')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_mobil');
    }
};
