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
        Schema::create('kendali_alats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jamur_id')->constrained('jamurs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tahap_pertumbuhan');
            $table->string('nama_alat');
            $table->double('suhu_min')->nullable();
            $table->double('suhu_max')->nullable();
            $table->double('kelembapan_udara_min')->nullable();
            $table->double('kelembapan_udara_max')->nullable();
            $table->time('jam')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendali_alats');
    }
};
