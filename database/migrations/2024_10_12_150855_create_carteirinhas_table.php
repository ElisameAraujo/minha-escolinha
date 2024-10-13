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
        Schema::create('carteirinhas', function (Blueprint $table) {
            $table->increments('carteirinhaID');
            $table->integer('atletaID');
            $table->timestamp('dataExpedicao')->nullable();
            $table->timestamp('dataExpiracao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carteirinhas');
    }
};
