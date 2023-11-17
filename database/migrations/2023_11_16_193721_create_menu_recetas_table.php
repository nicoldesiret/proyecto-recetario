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
        Schema::create('menu_recetas', function (Blueprint $table) {
            $table->foreignId('recetas_id')->constrained();
            $table->foreignId('menu_id')->constrained();
            $table->string('dia');
            $table->string('tipo_comida');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_recetas');
    }
};
