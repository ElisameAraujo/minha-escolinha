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
        Schema::create('status_comentarios', function (Blueprint $table) {
            $table->increments('statusID');
            $table->string('statusComentario', 50);
            $table->string('slugStatus', 100);
            $table->string('statusClasse');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_comentarios');
    }
};
