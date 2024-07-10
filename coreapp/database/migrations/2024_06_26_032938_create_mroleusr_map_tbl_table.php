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
        Schema::create('droleusr_map_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('musr_username');
            $table->integer('mrole_id');
            $table->string('droleusr_username_creator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('droleusr_map_tbl');
    }
};
