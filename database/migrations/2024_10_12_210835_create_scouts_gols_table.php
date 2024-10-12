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
        Schema::create('scout_gols', function (Blueprint $table) {
            $table->increments('scoutID');
            $table->integer('atletaID');
            $table->integer('gols');
            $table->timestamp('dataGols');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scout_gols');
    }
};
