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
        Schema::create('mobil', function (Blueprint $table) {
            $table->string('mobilID', 10)->primary();
            $table->string('idJenis', 10);
            $table->string('idMesin', 10);
            $table->string('idBrand', 10);
            $table->string('idUkuranKarakter', 10);
            $table->string('idPlatNomor', 10);
            $table->string('idUser', 10);
            $table->string('idLetakSetir', 10);
            $table->string('negara_asal', 5)->nullable();
            $table->string('namaMobil');
            $table->string('kode_body', 10);
            $table->year('tahun_mobil');
            $table->string('noDataBuat');
            $table->string('noDataUbah', 10);
            $table->integer('jumlahUbah');
            $table->text('keterangan');
            $table->integer('part');
            $table->string('benuaAsal', 10);
            $table->timestamps();

            $table->foreign('idJenis')->references('jenisID')->on('jenis')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('idMesin')->references('mesinID')->on('mesin')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('idBrand')->references('brandID')->on('brand')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('idUkuranKarakter')->references('ukuranKarakterID')->on('ukuran_karakter')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('idPlatNomor')->references('platNomorID')->on('plat_nomor')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('idUser')->references('userID')->on('users')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('idLetakSetir')->references('letakSetirID')->on('letak_setir')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('negara_asal')->references('kodeNegara')->on('kode_negara')->onDelete('no action')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};
