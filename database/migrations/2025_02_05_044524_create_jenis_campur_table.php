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
        Schema::create('jenis_campur', function (Blueprint $table) {
            $table->string('jenisCampurID', 10)->primary();
            $table->string('idJenis', 10);
            $table->string('stringGabungan', length: 10);
            $table->timestamps();

            $table->foreign('idJenis')->references('jenisID')->on('jenis')->onDelete('no action')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_campur');
    }
};
