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
            $table->bigInteger('apprentince_id')->comment('foreign key user');
            $table->float('discipline_score')->comment('skor disiplin');
            $table->float('teamwork_score')->comment('skor kerjasama');
            $table->float('initiative_score')->comment('skor inisiatif');
            $table->float('diligent_score')->comment('skor kerajinan');
            $table->float('responsibility_score')->comment('skor tanggung jawab');
            $table->float('attitude_score')->comment('skor sikap');
            $table->float('performance_score')->comment('skor prestasi');
            $table->float('total_score')->comment('skor skor');
            $table->float('average_score')->comment('rata-rata skor');
            $table->string('predicate')->comment('Predikat');
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
