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
        Schema::create('kembar', function (Blueprint $table) {
            $table->string('kembarID', 10)->primary();
            $table->string('idMobil', 10);
            $table->string('idBrand', 10)->nullable();
            $table->integer('namaMobil');
            $table->string('valuieIdentifier', 20);
            $table->string('status', 2);
            $table->timestamps();

            $table->foreign('idBrand')->references('brandID')->on('brand')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('idMobil')->references('mobilID')->on('mobil')->onDelete('no action')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kembar');
    }
};
