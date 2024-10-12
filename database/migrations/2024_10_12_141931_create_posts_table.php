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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('postID');
            $table->string('tituloPost', 100);
            $table->text('conteudo');
            $table->string('resumo', 150);
            $table->tinyInteger('categoriaID')->unsigned();
            $table->tinyInteger('statusID')->unsigned();
            $table->tinyInteger('usuarioID')->unsigned();
            $table->string('postCover', 512);
            $table->string('slugPost', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
