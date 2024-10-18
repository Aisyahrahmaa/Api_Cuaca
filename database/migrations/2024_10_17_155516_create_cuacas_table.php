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
        Schema::create('cuacas', function (Blueprint $table) {
            $table->id('id_Cuaca');
            $table->integer('Suhu');
            $table->string('Kelembapan');
            $table->string('Kondisi');
            $table->dateTime('Tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuacas');
    }
};
