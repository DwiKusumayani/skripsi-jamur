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
        Schema::create('monitoring_jamurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jamur_id')->constrained('jamurs')->onDelete('cascade')->onUpdate('cascade');
            $table->double('suhu');
            $table->double('kelembapan_udara');
            $table->timestamp('waktu');
            $table->string('tahap_pertumbuhan');
            $table->boolean('status_kipas');
            $table->boolean('status_mist_maker');
            $table->boolean('status_tirai');
            $table->boolean('status_lampu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoring_jamurs');
    }
};
