<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Essa tabela tem por objetivo armazenar todos os adversários de uma equipe, sejam
     * eles de um campeonato ou de uma partida amistosa para que possam ser reusados
     * no futuro quando necessário.
     */

    public function up(): void
    {
        Schema::create('adversarios', function (Blueprint $table) {
            $table->increments('adversarioID');
            $table->string('adversarioNome');
            $table->string('adversarioLogo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adversarios');
    }
};
