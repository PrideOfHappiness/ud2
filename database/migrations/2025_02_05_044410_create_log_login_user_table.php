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
        Schema::create('log_login_user', function (Blueprint $table) {
            $table->uuid('logLoginID')->primary();
            $table->string('idUser', 10);
            $table->dateTime('dateLogin');
            $table->dateTime(column: 'datelogout');
            $table->timestamps();

            $table->foreign('idUser')->references('userID')->on('users')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_login_user');
    }
};
