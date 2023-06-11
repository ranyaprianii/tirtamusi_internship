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
        Schema::create('apprentince_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('apprentince_id')->nullable()->comment('foreign key apprentince');
            $table->bigInteger('unit_id')->nullable()->comment('foreign key unit');
            $table->bigInteger('section_unit_id')->nullable()->comment('foreign key section unit');
            $table->bigInteger('division_id')->nullable()->comment('foreign key division');
            $table->bigInteger('section_division_id')->nullable()->comment('foreign key section division');
            $table->string('nisn_nim')->comment('nisn/nim');
            $table->string('department')->comment('asal jurusan');
            $table->string('name')->comment('nama');
            $table->string('gender')->comment('jenis kelamin');
            $table->date('birth_date')->comment('tanggal lahir');
            $table->string('birth_place')->comment('tempat lahir');
            $table->text('address')->comment('alamat');
            $table->string('phone_number')->comment('nomor hp');
            $table->date('date_start')->nullable()->comment('tanggal mulai');
            $table->date('date_end')->nullable()->comment('tanggal selesai');

            $table->string('sertificate')->nullable()->comment('sertifikat magang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprentince_details');
    }
};
