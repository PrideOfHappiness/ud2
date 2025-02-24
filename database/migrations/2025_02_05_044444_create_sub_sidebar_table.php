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
        Schema::create('subSider', function (Blueprint $table) {
            $table->string('subSidebarID', 10)->primary();
            $table->string('idSidebar', 10);
            $table->string('nama');
            $table->string('route');
            $table->string('icon');
            $table->integer('order');
            $table->timestamps();

            $table->foreign('idSidebar')->references('sidebarID')->on('sidebar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_sidebar');
    }
};
