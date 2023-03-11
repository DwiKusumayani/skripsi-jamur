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
        Schema::create('jamurs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tahap_pertumbuhan');
            $table->date('tanggal_tanam');
            $table->boolean('status_kipas')->default(0);
            $table->boolean('status_mist_maker')->default(0);
            $table->boolean('status_tirai')->default(0);
            $table->boolean('status_lampu')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jamurs');
    }
};
