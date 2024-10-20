<?php

namespace Database\Seeders\Configuracoes;

use App\Models\Atletas\CategoriasAtletas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasAtletasSeeder extends Seeder
{
    /**
     * A lista de categorias de atletas aqui são baseadas na lista encontrada
     * no link: https://ligariopardensedefutsal.com.br/ligamelhor/catidade.asp
     * 
     * Essa lista também se baseia na lista da Federação Paulista de Futebol 
     * através do link: https://www.federacaopaulistadefutsal.com.br/novo/wp-content/uploads/2018/05/TABELA-DE-IDADES-2019-.pdf
     * 
     * As denominações aqui neste seeder servem tanto para as equipes/escolinhas
     * de futebol de salão como futebol de campo.
     * 
     * Elas podem ser alteradas a qualquer momento neste projeto para refletirem
     * melhor o nome das categorias.
     */

    public function run(): void
    {
        /** *Masculino* **/
        CategoriasAtletas::create([
            'categoriaAtletaID' => 1, 
            'categoriaNome' => 'Chupetinha', 
            'categoriaDenominacao' => 'Sub-5',
            'genero' => 1
        ])->create([
            'categoriaAtletaID' => 2, 
            'categoriaNome' => 'Mamadeira', 
            'categoriaDenominacao' => 'Sub-7',
            'genero' => 1
        ])->create([
            'categoriaAtletaID' => 3, 
            'categoriaNome' => 'Fraldinha', 
            'categoriaDenominacao' => 'Sub-9',
            'genero' => 1
        ])->create([
            'categoriaAtletaID' => 4, 
            'categoriaNome' => 'Pré-Mirim', 
            'categoriaDenominacao' => 'Sub-11',
            'genero' => 1,
        ])->create([
            'categoriaAtletaID' => 5, 
            'categoriaNome' => 'Mirim', 
            'categoriaDenominacao' => 'Sub-13',
            'genero' => 1,
        ])->create([
            'categoriaAtletaID' => 6, 
            'categoriaNome' => 'Infantil', 
            'categoriaDenominacao' => 'Sub-15',
            'genero' => 1,
        ])->create([
            'categoriaAtletaID' => 7, 
            'categoriaNome' => 'Juvenil', 
            'categoriaDenominacao' => 'Sub-17',
            'genero' => 1,
        ])->create([
            'categoriaAtletaID' => 8, 
            'categoriaNome' => 'Sub-19', 
            'categoriaDenominacao' => 'Sub-19',
            'genero' => 1,
        ])->create([
            'categoriaAtletaID' => 9, 
            'categoriaNome' => 'Sub-21', 
            'categoriaDenominacao' => 'Sub-21',
            'genero' => 1,
        ])->create([
            'categoriaAtletaID' => 10, 
            'categoriaNome' => 'Sub-23', 
            'categoriaDenominacao' => 'Sub-23',
            'genero' => 1,
        ])->create([
            'categoriaAtletaID' => 11, 
            'categoriaNome' => 'Profissional', 
            'categoriaDenominacao' => 'Profissional',
            'genero' => 1,
        ]);

        /** *Feminino* **/
        CategoriasAtletas::create([
            'categoriaAtletaID' => 12, 
            'categoriaNome' => 'Chupetinha', 
            'categoriaDenominacao' => 'Sub-5',
            'genero' => 2
        ])->create([
            'categoriaAtletaID' => 13, 
            'categoriaNome' => 'Mamadeira', 
            'categoriaDenominacao' => 'Sub-7',
            'genero' => 2
        ])->create([
            'categoriaAtletaID' => 14, 
            'categoriaNome' => 'Fraldinha', 
            'categoriaDenominacao' => 'Sub-9',
            'genero' => 2
        ])->create([
            'categoriaAtletaID' => 15, 
            'categoriaNome' => 'Pré-Mirim', 
            'categoriaDenominacao' => 'Sub-11',
            'genero' => 2,
        ])->create([
            'categoriaAtletaID' => 16, 
            'categoriaNome' => 'Mirim', 
            'categoriaDenominacao' => 'Sub-13',
            'genero' => 2,
        ])->create([
            'categoriaAtletaID' => 17, 
            'categoriaNome' => 'Infantil', 
            'categoriaDenominacao' => 'Sub-15',
            'genero' => 2,
        ])->create([
            'categoriaAtletaID' => 18, 
            'categoriaNome' => 'Juvenil', 
            'categoriaDenominacao' => 'Sub-17',
            'genero' => 2,
        ])->create([
            'categoriaAtletaID' => 19, 
            'categoriaNome' => 'Sub-19', 
            'categoriaDenominacao' => 'Sub-19',
            'genero' => 2,
        ])->create([
            'categoriaAtletaID' => 20, 
            'categoriaNome' => 'Sub-21', 
            'categoriaDenominacao' => 'Sub-21',
            'genero' => 2,
        ])->create([
            'categoriaAtletaID' => 21, 
            'categoriaNome' => 'Sub-23', 
            'categoriaDenominacao' => 'Sub-23',
            'genero' => 2,
        ])->create([
            'categoriaAtletaID' => 22, 
            'categoriaNome' => 'Profissional', 
            'categoriaDenominacao' => 'Profissional',
            'genero' => 2,
        ]);
    }
}
