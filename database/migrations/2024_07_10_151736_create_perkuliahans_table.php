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
        Schema::create('perkuliahans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id');
            $table->unsignedBigInteger('dosen_id');
            $table->unsignedBigInteger('matakuliah_id');
            $table->timestamps();

            //Foreign Key Langsung Dibuatkan Pada Halaman ini !

        $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas')->onDelete('cascade');
        $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade');
        $table->foreign('matakuliah_id')->references('id')->on('matakuliahs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkuliahans');
    }
};
