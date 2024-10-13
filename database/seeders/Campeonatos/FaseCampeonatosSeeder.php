<?php

namespace Database\Seeders\Campeonatos;

use App\Models\Campeonatos\FaseCampeonatos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaseCampeonatosSeeder extends Seeder
{
    /**
     * Esse seed tem as principais fase de um campeonato.
     * Outras fases podem ser adicionados conforme o feedback dos usuários.
     */

    public function run(): void
    {
        FaseCampeonatos::create([
            'faseID' => 1, 
            'nomeFase' => 'Fase de Grupos', 
            'nomeFaseCurto' => 'grupos',
        ])->create([
            'faseID' => 2, 
            'nomeFase' => 'Oitavas-de-Final', 
            'nomeFaseCurto' => 'oitavas',
        ])->create([
            'faseID' => 3, 
            'nomeFase' => 'Quartas-de-Final', 
            'nomeFaseCurto' => 'quartas',
        ])->create([
            'faseID' => 4, 
            'nomeFase' => 'Semifinal', 
            'nomeFaseCurto' => 'semi',
        ])->create([
            'faseID' => 5, 
            'nomeFase' => 'Final', 
            'nomeFaseCurto' => 'final',
        ])->create([
            'faseID' => 6, 
            'nomeFase' => 'Disputa 3º Lugar', 
            'nomeFaseCurto' => 'terceiro',
        ])->create([
            'faseID' => 7, 
            'nomeFase' => 'Repescagem', 
            'nomeFaseCurto' => 'repescagem',
        ])->create([
            'faseID' => 8, 
            'nomeFase' => '1ª Fase', 
            'nomeFaseCurto' => '1-fase',
        ])->create([
            'faseID' => 9, 
            'nomeFase' => '2ª Fase', 
            'nomeFaseCurto' => '2-fase',
        ])->create([
            'faseID' => 10, 
            'nomeFase' => '3ª Fase', 
            'nomeFaseCurto' => '3-fase',
        ])->create([
            'faseID' => 11, 
            'nomeFase' => 'Quadrangular Final', 
            'nomeFaseCurto' => 'quadrangular',
        ])->create([
            'faseID' => 12, 
            'nomeFase' => 'Triangular Final', 
            'nomeFaseCurto' => 'triangular',
        ]);
    }
}
