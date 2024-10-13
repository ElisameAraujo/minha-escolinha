<?php

namespace Database\Seeders\Atletas;

use App\Models\Atletas\PosicoesJogador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PosicoesJogadoresSeeder extends Seeder
{
    /**
     * Esse seeder contém todas as posições conhecidas para o futebol e futsal
     * Futebol: https://www.esportelandia.com.br/futebol/posicoes-do-futebol/
     * Futsal: https://clubepaineiras.org.br/futsal/
     */

    public function run(): void
    {
        //Futsal
        PosicoesJogador::create([
            'posicaoID' => 1, 
            'posicao' => 'Goleiro', 
            'siglaPosicao' => 'GOL', 
            'esporte' => 'futsal',
            'classePosicao' => 'bg-gol'
        ])->create([
            'posicaoID' => 2, 
            'posicao' => 'Fixo', 
            'siglaPosicao' => 'FIXO', 
            'esporte' => 'futsal',
            'classePosicao' => 'bg-fixo'
        ])->create([
            'posicaoID' => 3, 
            'posicao' => 'Ala', 
            'siglaPosicao' => 'ALA', 
            'esporte' => 'futsal',
            'classePosicao' => 'bg-ala-fs'
        ])->create([
            'posicaoID' => 4, 
            'posicao' => 'Pivô', 
            'siglaPosicao' => 'PIV', 
            'esporte' => 'futsal',
            'classePosicao' => 'bg-pivo'
        ]);

        //Futebol
        PosicoesJogador::create([
            'posicaoID' => 5, 
            'posicao' => 'Goleiro', 
            'siglaPosicao' => 'GOL', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-gol'
        ])->create([
            'posicaoID' => 6, 
            'posicao' => 'Lateral Direito', 
            'siglaPosicao' => 'LD', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-lat'
        ])->create([
            'posicaoID' => 7, 
            'posicao' => 'Lateral Esquerdo', 
            'siglaPosicao' => 'LE', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-lat'
        ])->create([
            'posicaoID' => 8, 
            'posicao' => 'Ala Direito', 
            'siglaPosicao' => 'AD', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-ala-ft'
        ])->create([
            'posicaoID' => 9, 
            'posicao' => 'Ala Esquerdo', 
            'siglaPosicao' => 'AE', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-ala-ft'
        ])->create([
            'posicaoID' => 11, 
            'posicao' => 'Zagueiro', 
            'siglaPosicao' => 'ZAG', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-zag'
        ])->create([
            'posicaoID' => 12, 
            'posicao' => 'Líbero', 
            'siglaPosicao' => 'LIB', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-lib'
        ])->create([
            'posicaoID' => 13, 
            'posicao' => 'Volante', 
            'siglaPosicao' => 'VOL', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-vol'
        ])->create([
            'posicaoID' => 14, 
            'posicao' => '1º Volante', 
            'siglaPosicao' => 'PVOL', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-pvol'
        ])->create([
            'posicaoID' => 15, 
            'posicao' => '2º Volante', 
            'siglaPosicao' => 'SVOL', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-svol'
        ])->create([
            'posicaoID' => 16, 
            'posicao' => 'Meio Campo', 
            'siglaPosicao' => 'MEI', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-mei'
        ])->create([
            'posicaoID' => 17, 
            'posicao' => 'Meia-Armador', 
            'siglaPosicao' => 'MEA', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-mea'
        ])->create([
            'posicaoID' => 18, 
            'posicao' => 'Meia Lateral', 
            'siglaPosicao' => 'MLT', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-mlt'
        ])->create([
            'posicaoID' => 19, 
            'posicao' => 'Meia-Atacante', 
            'siglaPosicao' => 'MAT', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-mat'
        ])->create([
            'posicaoID' => 20, 
            'posicao' => 'Segundo Atacante', 
            'siglaPosicao' => 'SA', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-sa'
        ])->create([
            'posicaoID' => 21, 
            'posicao' => 'Ponta Direita', 
            'siglaPosicao' => 'PD', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-pt'
        ])->create([
            'posicaoID' => 22, 
            'posicao' => 'Ponta Esquerda', 
            'siglaPosicao' => 'PE', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-pt'
        ])->create([
            'posicaoID' => 23, 
            'posicao' => 'Centro-Avante', 
            'siglaPosicao' => 'CA', 
            'esporte' => 'futebol',
            'classePosicao' => 'bg-ca'
        ]);
    }
}
