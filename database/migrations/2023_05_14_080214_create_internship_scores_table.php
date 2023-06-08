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
        Schema::create('internship_scores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->comment('foreign key user');
            $table->bigInteger('discipline_score')->comment('skor disiplin');
            $table->bigInteger('teamwork_score')->comment('skor kerjasama');
            $table->bigInteger('initiative_score')->comment('skor inisiatif');
            $table->bigInteger('diligent_score')->comment('skor kerajinan');
            $table->bigInteger('responsibility_score')->comment('skor tanggung jawab');
            $table->bigInteger('attitude_score')->comment('skor sikap');
            $table->bigInteger('performance_score')->comment('skor prestasi');
            $table->bigInteger('total_score')->comment('skor skor');
            $table->bigInteger('average_score')->comment('rata-rata skor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_scores');
    }
};
