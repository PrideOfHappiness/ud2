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
        Schema::create('komparasi', function (Blueprint $table) {
            $table->string('komparasiID', 10)->primary();
            $table->string('idMobil', 10);
            $table->string('idUser', 10);
            $table->integer('part');
            $table->string('stringGabungan', 20);
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
        Schema::dropIfExists('komparasi');
    }
};
