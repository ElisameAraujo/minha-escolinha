<?php

namespace Database\Seeders\Modules;

use App\Models\Modules\Mensalidades\TipoMensalidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoMensalidadeSeeder extends Seeder
{
    /**
     * Adiciona tipos e valores básicos para as mensalidades se o módulo de Mensalidade for ativado.
     * 
     * Por padrão o valor é 0 para todas as mensalidades para que o usuário defina o melhor valor
     * de acordo com as necessidades.
     */

    public function run(): void
    {
        TipoMensalidade::create([
            'tipoMensalidadeID' => 1, 'tipoMensalidade' => 'Mensal', 'valorMensalidade' => 0
        ])->create([
            'tipoMensalidadeID' => 2, 'tipoMensalidade' => 'Bolsa 25%', 'valorMensalidade' => 0
        ])->create([
            'tipoMensalidadeID' => 3, 'tipoMensalidade' => 'Bolsa 50%', 'valorMensalidade' => 0
        ])->create([
            'tipoMensalidadeID' => 4, 'tipoMensalidade' => 'Bolsa 75%', 'valorMensalidade' => 0
        ])->create([
            'tipoMensalidadeID' => 5, 'tipoMensalidade' => 'Bolsa 100%', 'valorMensalidade' => 0
        ]);
    }
}
