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
        Schema::create('value_ahp_awal', function (Blueprint $table) {
            $table->string('valueAHPAwalID', 10)->primary();
            $table->string('idKriteriaAHP', 10);
            $table->string('subkriteria');
            $table->float('valueAwal');
            $table->string('valuekriteria',8);
            $table->timestamps();

            $table->foreign('idKriteriaAHP')->references('kriteriaAHPID')->on('kriteria_ahp')->onDelete('no action')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('value_ahp_awal');
    }
};
