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
        Schema::create('foto_jenis', function (Blueprint $table) {
            $table->string('fotojenisID', 10)->primary();
            $table->string('idJenis', 10);
            $table->string('namaFile');
            $table->timestamps();

            $table->foreign('idJenis')->references('jenisID')->on('jenis')->onDelete('no action')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_jenis');
    }
};
