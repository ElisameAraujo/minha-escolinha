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
        Schema::create('tipo_mensalidades', function (Blueprint $table) {
            $table->increments('tipoMensalidadeID');
            $table->string('tipoMensalidade');
            $table->integer('valorMensalidade');
<<<<<<< HEAD
            $table->integer('descontoBolsa');
=======
>>>>>>> 1f0256ce6495ac5879157e5892828a0906a35ea4
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_mensalidades');
    }
};
