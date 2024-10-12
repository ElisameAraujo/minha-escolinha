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
            $table->string('documento', 20);
            $table->integer('matricula')->unsigned();
            $table->string('carteirinhaID')->unsigned()->nullable();
            $table->string('categoria');
            $table->string('email', 256)->nullable();
            $table->string('telefone', 20);
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
