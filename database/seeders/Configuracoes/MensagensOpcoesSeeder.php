<?php

namespace Database\Seeders\Configuracoes;

use App\Models\Modules\Mensagens\MotivoMensagem;
use App\Models\Modules\Mensagens\StatusMensagem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MensagensOpcoesSeeder extends Seeder
{
    /**
     * Adiciona os principais status de mensagens e os principais motivos de mensagens de um formulário de contato
     */
    public function run(): void
    {
        StatusMensagem::create(['statusMensagem' => 'Caixa de Entrada', 'slugStatus' => 'caixa-de-entrada'])
            ->create(['statusMensagem' => 'Lidas', 'slugStatus' => 'lidas'])
            ->create(['statusMensagem' => 'Spam', 'slugStatus' => 'spam'])
            ->create(['statusMensagem' => 'Lixeira', 'slugStatus' => 'lixeira']);

        MotivoMensagem::create([
            'motivoID' => 1,
            'motivo' => 'Dúvidas',
            'slug' => 'duvidas'
        ])->create([
            'motivoID' => 2,
            'motivo' => 'Problemas no Site',
            'slug' => 'problemas-no-site'
        ])->create([
            'motivoID' => 3,
            'motivo' => 'Sugestões',
            'slug' => 'sugestoes'
        ])->create([
            'motivoID' => 4,
            'motivo' => 'Patrocínios',
            'slug' => 'patrocinios'
        ])->create([
            'motivoID' => 5,
            'motivo' => 'Outros',
            'slug' => 'outros'
        ]);
    }
}
