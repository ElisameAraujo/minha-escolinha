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
        Schema::create('treinamentos', function (Blueprint $table) {
            $table->increments('treinamentoID');
            $table->string('categoriaAtletaID');
            $table->string('diasSemana');
            $table->string('genero');
            $table->string('horario');
            $table->string('tipoTreinoID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treinamentos');
    }
};
