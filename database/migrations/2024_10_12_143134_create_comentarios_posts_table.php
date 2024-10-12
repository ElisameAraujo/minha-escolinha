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
        Schema::create('comentarios_posts', function (Blueprint $table) {
            $table->smallIncrements('comentarioID');
            $table->string('autor');
            $table->string('email');
            $table->string('comentario');
            $table->smallInteger('statusComentario');
            $table->smallInteger('postID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios_posts');
    }
};
