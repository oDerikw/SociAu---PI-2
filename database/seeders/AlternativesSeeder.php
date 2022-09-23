<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternativesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        // Empatia
        DB::table('alternatives')->insert([
            'alternative' => 'Rir',
            'isCorrect' => 0,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Gritar',
            'isCorrect' => 0,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Fingir que não viu',
            'isCorrect' => 0,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Oferecer ajuda',
            'isCorrect' => 1,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Perguntar se está tudo bem',
            'isCorrect' => 1,
            'question_id' => 1,
        ]);
        // Empatia 2
        DB::table('alternatives')->insert([
            'alternative' => 'Sair correndo ',
            'isCorrect' => 0,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Xingar a pessoa',
            'isCorrect' => 0,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Mostrar a língua',
            'isCorrect' => 0,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Dizer muito obrigado',
            'isCorrect' => 1,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Elogiar a pessoa',
            'isCorrect' => 1,
            'question_id' => 2,
        ]);
        // Empatia 3
        DB::table('alternatives')->insert([
            'alternative' => 'Não gostei',
            'isCorrect' => 0,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Fazer cara feia',
            'isCorrect' => 0,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Jogar o presente fora',
            'isCorrect' => 0,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Obrigado! Vocês ficariam chateados se eu trocasse?',
            'isCorrect' => 1,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Obrigado! Mas não gostei muito do modelo. Dá para trocar?',
            'isCorrect' => 1,
            'question_id' => 3,
        ]);

        // Empatia 4
        DB::table('alternatives')->insert([
            'alternative' => 'Não dizer nada',
            'isCorrect' => 0,
            'question_id' => 4,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Ofender ele',
            'isCorrect' => 0,
            'question_id' => 4,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Dizer que outra coisa é mais importante',
            'isCorrect' => 0,
            'question_id' => 4,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Feliz aniversário!',
            'isCorrect' => 1,
            'question_id' => 4,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Parabéns!',
            'isCorrect' => 1,
            'question_id' => 4,
        ]);
        // Empatia 5
        DB::table('alternatives')->insert([
            'alternative' => 'Apenas comer',
            'isCorrect' => 0,
            'question_id' => 5,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Se virar',
            'isCorrect' => 0,
            'question_id' => 5,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Negar dividir',
            'isCorrect' => 0,
            'question_id' => 5,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Dividir com ele',
            'isCorrect' => 1,
            'question_id' => 5,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Oferecer algo a ele',
            'isCorrect' => 1,
            'question_id' => 5,
        ]);

        

        // Cotidiano
        DB::table('alternatives')->insert([
            'alternative' => 'Não ajudar em nada ',
            'isCorrect' => 0,
            'question_id' => 6,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Fingir que não escutou',
            'isCorrect' => 0,
            'question_id' => 6,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Gritar com quem te pediu ajuda',
            'isCorrect' => 0,
            'question_id' => 6,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Fazer sua parte e quando se sentir cansado pedir ajuda',
            'isCorrect' => 1,
            'question_id' => 6,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Conversar com seus pais sobre',
            'isCorrect' => 1,
            'question_id' => 6,
        ]);
        // Cotidiano 2
        DB::table('alternatives')->insert([
            'alternative' => 'Gritar e quebrar as coisas',
            'isCorrect' => 0,
            'question_id' => 7,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Ser agressivo com outras pessoas',
            'isCorrect' => 0,
            'question_id' => 7,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Sair correndo sem avisar ninguém',
            'isCorrect' => 0,
            'question_id' => 7,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Pedir ajuda para alguém de confiança',
            'isCorrect' => 1,
            'question_id' => 7,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Ir para outro lugar junto ao seus pais',
            'isCorrect' => 1,
            'question_id' => 7,
        ]);

        // Cotidiano 3
        DB::table('alternatives')->insert([
            'alternative' => 'Ficar bravo',
            'isCorrect' => 0,
            'question_id' => 8,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Sair correndo',
            'isCorrect' => 0,
            'question_id' => 8,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Xingar os amigos',
            'isCorrect' => 0,
            'question_id' => 8,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Conversar com eles para jogar cartas em outro momento',
            'isCorrect' => 1,
            'question_id' => 8,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Achar uma terceira opção que possa agradar a todos',
            'isCorrect' => 1,
            'question_id' => 8,
        ]);

        // Cotidiano 4
        DB::table('alternatives')->insert([
            'alternative' => 'Inventar uma mentira',
            'isCorrect' => 0,
            'question_id' => 9,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Empurrar a pessoa',
            'isCorrect' => 0,
            'question_id' => 9,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Gritar com a pessoa',
            'isCorrect' => 0,
            'question_id' => 9,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Responder com calma: "Não Obrigado.',
            'isCorrect' => 1,
            'question_id' => 9,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Recusar amigávelmente',
            'isCorrect' => 1,
            'question_id' => 9,
        ]);

        // Cotidiano 5
        DB::table('alternatives')->insert([
            'alternative' => 'Ignora o vendedor',
            'isCorrect' => 0,
            'question_id' => 10,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Se esconder do vendedor',
            'isCorrect' => 0,
            'question_id' => 10,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Sair correndo',
            'isCorrect' => 0,
            'question_id' => 10,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Dar bom dia e falar o que veio comprar',
            'isCorrect' => 1,
            'question_id' => 10,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Responder amigávelmente com oi e dizer o que procura',
            'isCorrect' => 1,
            'question_id' => 10,
        ]);

        // Sentimentos
        DB::table('alternatives')->insert([
            'alternative' => 'Ser rude com outra pessoa',
            'isCorrect' => 0,
            'question_id' => 11,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Gritar',
            'isCorrect' => 0,
            'question_id' => 11,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Se machucar',
            'isCorrect' => 0,
            'question_id' => 11,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Tomar um copo de água para se acalmar',
            'isCorrect' => 1,
            'question_id' => 11,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => ' Respire fundo e procure um local mais calmo. ',
            'isCorrect' => 1,
            'question_id' => 11,
        ]);

        // Sentimentos 2
        DB::table('alternatives')->insert([
            'alternative' => 'Se trancar no quarto sozinho',
            'isCorrect' => 0,
            'question_id' => 12,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Sair sem avisar ninguém',
            'isCorrect' => 0,
            'question_id' => 12,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Se machucar',
            'isCorrect' => 0,
            'question_id' => 12,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Desabafar com outra pessoa',
            'isCorrect' => 1,
            'question_id' => 12,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Fazer uma atividade que gosta, como desenhar ou ver filmes',
            'isCorrect' => 1,
            'question_id' => 12,
        ]);

        // Sentimentos 3
        DB::table('alternatives')->insert([
            'alternative' => 'Fazer xixi na cama',
            'isCorrect' => 0,
            'question_id' => 13,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Se esconder',
            'isCorrect' => 0,
            'question_id' => 13,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Pedir aos pais para não sair de casa, aos prantos',
            'isCorrect' => 0,
            'question_id' => 13,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Conversar com os pais ou professora',
            'isCorrect' => 1,
            'question_id' => 13,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Desenhe ou escreva o que está sentindo.',
            'isCorrect' => 1,
            'question_id' => 13,
        ]);

        // Sentimentos 4
        DB::table('alternatives')->insert([
            'alternative' => 'Ficar chorando',
            'isCorrect' => 0,
            'question_id' => 14,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Tomar um remédio sem a supervisão de um adulto',
            'isCorrect' => 0,
            'question_id' => 14,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Ficar mexendo no machucado',
            'isCorrect' => 0,
            'question_id' => 14,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Pedir ajuda para algum adulto',
            'isCorrect' => 1,
            'question_id' => 14,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Mostrar o ferimento para alguém ',
            'isCorrect' => 1,
            'question_id' => 14,
        ]);

        // Sentimentos 5
        DB::table('alternatives')->insert([
            'alternative' => 'Ficar desanimado',
            'isCorrect' => 0,
            'question_id' => 15,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Tampar o rosto com a mão',
            'isCorrect' => 0,
            'question_id' => 15,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'começa a imitar oque as pessoas falam',
            'isCorrect' => 0,
            'question_id' => 15,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Respire fundo, e volte a fazer oque estava fazendo.',
            'isCorrect' => 1,
            'question_id' => 15,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Admita o que você está sentindo,para seus pais ou amigos ',
            'isCorrect' => 1,
            'question_id' => 15,
        ]);

        // Higiene
        DB::table('alternatives')->insert([
            'alternative' => 'Falar agressivamente "banheiro, agora!',
            'isCorrect' => 0,
            'question_id' => 16,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Ir ao banheiro sem dizer nada',
            'isCorrect' => 0,
            'question_id' => 16,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Não fazer nada e segurar até voltar para casa',
            'isCorrect' => 0,
            'question_id' => 16,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Você poderia me dizer onde fica o banheiro?',
            'isCorrect' => 1,
            'question_id' => 16,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Dizer "com liçenca, preciso usar o banheiro"',
            'isCorrect' => 1,
            'question_id' => 16,
        ]);

        // Higiene 2
        DB::table('alternatives')->insert([
            'alternative' => 'Sujar o banheiro',
            'isCorrect' => 0,
            'question_id' => 17,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Se trancar no banheiro',
            'isCorrect' => 0,
            'question_id' => 17,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Deixar a torneira ligada',
            'isCorrect' => 0,
            'question_id' => 17,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Lavar a mão depois de usar o banheiro',
            'isCorrect' => 1,
            'question_id' => 17,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Dar descarga depois de usar o banheiro',
            'isCorrect' => 1,
            'question_id' => 17,
        ]);

        // Higiene 3
        DB::table('alternatives')->insert([
            'alternative' => 'Faz birra',
            'isCorrect' => 0,
            'question_id' => 18,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Grita com a sua mãe',
            'isCorrect' => 0,
            'question_id' => 18,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Ignora sua mãe',
            'isCorrect' => 0,
            'question_id' => 18,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Responde que irá tomar o banho agora mesmo',
            'isCorrect' => 1,
            'question_id' => 18,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Assim que terminar o que está fazendo vai tomar banho',
            'isCorrect' => 1,
            'question_id' => 18,
        ]);

        // Higiene 4
        DB::table('alternatives')->insert([
            'alternative' => 'Apenas ignorar',
            'isCorrect' => 0,
            'question_id' => 19,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Tossir em direção a uma pessoa',
            'isCorrect' => 0,
            'question_id' => 19,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Não fazer nada',
            'isCorrect' => 0,
            'question_id' => 19,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Colocar a mão sobre a boca',
            'isCorrect' => 1,
            'question_id' => 19,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Usar uma máscara',
            'isCorrect' => 1,
            'question_id' => 19,
        ]);

        // Higiene 5
        DB::table('alternatives')->insert([
            'alternative' => 'Sair correndo',
            'isCorrect' => 0,
            'question_id' => 20,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Escovar os dentes',
            'isCorrect' => 0,
            'question_id' => 20,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Dizer que está bem assim',
            'isCorrect' => 0,
            'question_id' => 20,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Usar palito de dente ou fio dental',
            'isCorrect' => 1,
            'question_id' => 20,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'Usar uma máscara',
            'isCorrect' => 1,
            'question_id' => 20,
        ]);
    }
}
