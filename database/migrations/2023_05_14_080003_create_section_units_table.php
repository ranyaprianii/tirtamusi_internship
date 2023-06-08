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
        Schema::create('section_units', function (Blueprint $table) {
            $table->id();
            $table->string('unit_id')->comment('foreign key unit');
            $table->string('name')->comment('nama');
            $table->text('description')->comment('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_units');
    }
};
