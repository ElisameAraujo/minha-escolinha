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
        Schema::create('amistosos', function (Blueprint $table) {
            $table->increments('amistosoID');
            $table->string('adversario');
            $table->string('logoAdversario')->nullable();
            $table->date('dataPartida');
            $table->string('horario', 5);
            $table->string('local', 64);
            $table->integer('categoriaAtletaID');
            $table->boolean('mandante')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amistosos');
    }
};
