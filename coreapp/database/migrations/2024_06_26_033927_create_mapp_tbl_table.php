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
        Schema::create('mapp_tbl', function (Blueprint $table) {
            $table->string('mapp_code')->unique()->primary();
            $table->string('mapp_appnm');
            $table->string('mapp_appdesc');
            $table->string('mapp_appurl');
            $table->string('mapp_appicon');
            $table->string('mapp_apploc');
            $table->string('mapp_codeprnt');
            $table->boolean('mapp_isshared');
            $table->boolean('mapp_isform');
            $table->string('droleusr_username_creator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapp_tbl');
    }
};
