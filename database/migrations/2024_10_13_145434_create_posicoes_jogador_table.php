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
        Schema::create('posicoes_jogador', function (Blueprint $table) {
            $table->increments('posicaoID');
            $table->string('posicao');
            $table->string('siglaPosicao', 4);
            $table->string('classePosicao');
            $table->string('esporte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posicoes_jogador');
    }
};
