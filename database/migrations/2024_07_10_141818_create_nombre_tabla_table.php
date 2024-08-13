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
        Schema::create('nombre_tabla', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // otras columnas que necesites
            $table->string('imagen')->nullable(); // columna para la imagen
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nombre_tabla');
    }
};
