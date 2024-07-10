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
        Schema::create('dusr_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('musr_username');
            $table->string('dusr_fname');
            $table->string('dusr_lname');
            $table->string('dusr_birthplace');
            $table->date('dusr_birthdate');
            $table->string('dusr_idcard');
            $table->string('dusr_idcardtype');
            $table->string('dusr_photo');
            $table->string('dusr_phone');
            $table->string('dusr_cellphone');
            $table->string('dusr_country');
            $table->string('dusr_states');
            $table->string('dusr_cities');
            $table->string('dusr_district');
            $table->string('dusr_subdistrict');
            $table->text('dusr_addr1');
            $table->text('dusr_addr2');
            $table->string('dusr_rsdn_country');
            $table->string('dusr_rsdn_states');
            $table->string('dusr_rsdn_cities');
            $table->string('dusr_rsdn_district');
            $table->string('dusr_rsdn_subdistrict');
            $table->text('dusr_rsdn_addr1');
            $table->text('dusr_rsdn_addr2');
            $table->string('dusr_username_creator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dusret_tbl');
    }
};
