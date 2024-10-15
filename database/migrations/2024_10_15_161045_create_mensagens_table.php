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
        Schema::create('mensagens', function (Blueprint $table) {
            $table->increments('mensagemID');
            $table->string('autor', 256);
            $table->string('email', 512);
            $table->string('corpoMensagem', 2000);
            $table->tinyInteger('motivoMensagem')->unsigned();
            $table->tinyInteger('statusID')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagens');
    }
};
