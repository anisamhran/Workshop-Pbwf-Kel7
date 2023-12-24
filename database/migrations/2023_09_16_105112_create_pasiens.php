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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien', 100)->nullable();

            $table->string('no_telp_pasien', 15)->nullable();
            $table->string('email_pasien', 50)->nullable();
            $table->string('alamat_pasien', 250)->nullable();
            $table->string('jk_pasien')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
