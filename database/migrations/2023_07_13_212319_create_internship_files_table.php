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
        Schema::create('internship_files', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('apprentince_id')->comment('foreign key user');
            $table->string('report_file')->comment('judul laporan');
            $table->string('file')->comment('file laporan magang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_files');
    }
};
