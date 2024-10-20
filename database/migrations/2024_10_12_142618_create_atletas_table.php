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
        Schema::create('atletas', function (Blueprint $table) {
            $table->increments('atletaID');
            $table->string('nomeAtleta');
            $table->string('dataNascimento');
            $table->string('endereco');
            $table->string('documento', 20);
            $table->integer('matricula')->unsigned();
            $table->integer('carteirinhaID')->unsigned()->nullable();
            $table->integer('categoriaID')->unsigned();
            $table->tinyInteger('posicaoID');
            $table->string('outrasPosicoes')->nullable();
            $table->string('email', 256)->nullable();
            $table->string('telefone', 20);
            $table->string('genero', 1);
            $table->tinyInteger('esporte');
            $table->string('foto');
            $table->integer('responsavelID')->nullable();
            $table->string('fotoPerfil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atletas');
    }
};
