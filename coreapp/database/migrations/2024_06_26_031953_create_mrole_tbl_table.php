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
        Schema::create('mrole_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('mrole_rolenm');
            $table->string('mrole_roledsc');
            $table->string('musr_username_creator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mrole_tbl');
    }
};
