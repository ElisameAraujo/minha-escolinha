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
        Schema::create('categorias_atletas', function (Blueprint $table) {
            $table->increments('categoriaAtletaID');
            $table->string('categoriaNome');
            $table->string('categoriaDenominacao');
            $table->tinyInteger('genero')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_atletas');
    }
};
