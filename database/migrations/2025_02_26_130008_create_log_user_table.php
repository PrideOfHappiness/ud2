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
        Schema::create('log_user', function (Blueprint $table) {
            $table->uuid('logUserID')->primary();
            $table->string('idUser', 10);
            $table->text('keterangan');
            $table->string('norec', 50);
            $table->timestamps();

            $table->foreign('idUser')->references('userID')->on('users')->onDelete('no action')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_user');
    }
};
