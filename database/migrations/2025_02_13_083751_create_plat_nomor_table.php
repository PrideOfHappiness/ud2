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
        Schema::create('plat_nomor', function (Blueprint $table) {
            $table->string('platNomorID', 10)->primary();
            $table->string('negaraID', 10);
            $table->string('jenisPlatNomor', 100);
            $table->string('ukurankarakter', length: 10);
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('negaraID')->references('kodeNegara')->on('kode_negara')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('ukurankarakter')->references('ukuranKarakterID')->on('ukuran_karakter')->onDelete('no action')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plat_nomor');
    }
};
