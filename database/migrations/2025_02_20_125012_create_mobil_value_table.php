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
        Schema::create('mobil_value', function (Blueprint $table) {
            $table->string('mobilValueID', 10)->primary();
            $table->string('idMobil', 10);
            $table->string('idKriteriaAHP', 10);
            $table->float('valueKriteriaAHP');
            $table->string('status', 3);
            $table->timestamps();

            $table->foreign('idKriteriaAHP')->references('kriteriaAHPID')->on('kriteria_ahp')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('idMobil')->references('mobilID')->on('mobil')->onDelete('no action')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil_value');
    }
};
