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
        Schema::create('user_detail', function (Blueprint $table) {
            $table->string('userDetailID', 10)->primary();
            $table->string('idUser', 10);
            $table->string('alamat');
            $table->string('idNegara', 10);
            $table->string('gender',2);
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('idUser')->references('userID')->on('users')->onDelete('no action');
            $table->foreign('idNegara')->references('kodeNegara')->on('kode_negara')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_detail');
    }
};
