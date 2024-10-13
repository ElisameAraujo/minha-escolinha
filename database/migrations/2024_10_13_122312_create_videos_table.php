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
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('videoID');
            $table->string('tituloVideo', 100);
            $table->string('descricaoVideo', 512);
            $table->date('publicadoEm')->nullable(true);
            $table->string('thumbnail', 256)->nullable(false);
            $table->tinyInteger('statusID')->unsigned()->nullable(false);
            $table->string('slug', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
