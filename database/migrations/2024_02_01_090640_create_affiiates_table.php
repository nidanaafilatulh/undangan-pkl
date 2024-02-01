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
        Schema::create('affiiates', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_wa');
            $table->string('email');
            $table->string('no_rek');
            $table->string('nama_bank');
            $table->string('atas_nama');
            $table->string('kode referral');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiiates');
    }
};
