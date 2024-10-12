<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Campeonatos\FaseCampeonatosSeed;
use Database\Seeders\Configuracoes\{
    CategoriasAtletasSeeder,
    InformacoesProjetoSeeder
};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(InformacoesProjetoSeeder::class);
        $this->call(CategoriasAtletasSeeder::class);
        $this->call(FaseCampeonatosSeed::class);
    }
}
