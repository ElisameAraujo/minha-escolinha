<?php

namespace Database\Seeders\Modules;

use App\Models\Modules\Videos\StatusVideos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusVideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusVideos::create([
            'statusID' => 1,
            'statusVideo' => 'Público',
            'statusClasse' => 'bg-success',
            'icone' => 'bi bi-eye-fill'
        ])->create([
            'statusID' => 2,
            'statusVideo' => 'Privado',
            'statusClasse' => 'bg-secondary',
            'icone' => 'bi bi-eye-slash-fill'
        ]);
    }
}
