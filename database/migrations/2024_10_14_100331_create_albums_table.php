<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Armazena todos os álbuns de fotos criados pelo usuário.
     */
    
    public function up(): void
    {
        Schema::create('albuns', function (Blueprint $table) {
            $table->increments('albumID');
            $table->string('albumTitulo');
            $table->string('albumCapa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albuns');
    }
};
