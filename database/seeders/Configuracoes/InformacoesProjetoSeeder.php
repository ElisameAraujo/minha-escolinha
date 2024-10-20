<?php

namespace Database\Seeders\Configuracoes;

use App\Models\Configuracoes\InformacoesProjeto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformacoesProjetoSeeder extends Seeder
{
    /**
     * Define configurações sobre o projeto e o valor à eles atribuídos
     */
    
    public function run(): void
    {
        InformacoesProjeto::create([
            'infoID' => 1,'informacao' => 'nomeProjeto', 'valor' => NULL
        ])->create([
            'infoID' => 2,'informacao' => 'dataFundacao', 'valor' => NULL
        ])->create([
            'infoID' => 3,'informacao' => 'telefone', 'valor' => NULL
        ])->create([
            'infoID' => 4,'informacao' => 'endereco', 'valor' => NULL
        ])->create([
            'infoID' => 5,'informacao' => 'cidade', 'valor' => NULL
        ])->create([
            'infoID' => 6,'informacao' => 'uf', 'valor' => NULL
        ])->create([
            'infoID' => 7,'informacao' => 'facebookURL', 'valor' => NULL
        ])->create([
            'infoID' => 8,'informacao' => 'instagramURL', 'valor' => NULL
        ])->create([
            'infoID' => 9,'informacao' => 'youtubeURL', 'valor' => NULL
        ])->create([
            'infoID' => 10,'informacao' => 'tipoDeProjeto', 'valor' => NULL
        ])->create([
            'infoID' => 11,'informacao' => 'categoriaEsporte', 'valor' => NULL
        ])->create([
            'infoID' => 12,'informacao' => 'cnpj', 'valor' => NULL
        ])->create([
            'infoID' => 13,'informacao' => 'logoEscudoProjeto', 'valor' => NULL
        ])->create([
            'infoID' => 14,'informacao' => 'corPrimaria', 'valor' => NULL
        ])->create([
            'infoID' => 15,'informacao' => 'corSecundaria', 'valor' => NULL
        ])->create([
            'infoID' => 16,'informacao' => 'corTerciaria', 'valor' => NULL
        ])->create([
            'infoID' => 17,'informacao' => 'valorMensalidade', 'valor' => NULL
        ])->create([
            'infoID' => 18,'informacao' => 'diaVencimentoMensalidade', 'valor' => 5
        ]);
    }
}
