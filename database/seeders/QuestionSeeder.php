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
      /*
        Perguntas Empatia
      */
        // Pergunta 1
        DB::table('alternatives')->insert([ // Pergunta Empatia 1 errada-1
            'alternative' => 'Rir',
            'isCorrect' => 0,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 1 errada-2
            'alternative' => 'Gritar',
            'isCorrect' => 0,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 1 errada-3
            'alternative' => 'Fingir que não viu',
            'isCorrect' => 0,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 1 correta-1
            'alternative' => 'Oferecer ajuda',
            'isCorrect' => 1,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 1 correta-2
            'alternative' => 'Perguntar se está tudo bem',
            'isCorrect' => 1,
            'question_id' => 1,
        ]);

        // Pergunta 2
        DB::table('alternatives')->insert([ // Pergunta Empatia 2 errada-1
            'alternative' => 'Sair correndo',
            'isCorrect' => 0,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 2 errada-2
            'alternative' => 'Xingar a pessoa',
            'isCorrect' => 0,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 2 errada-3
            'alternative' => 'Mostrar a língua',
            'isCorrect' => 0,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 2 correta-1
            'alternative' => 'Dizer muito obrigado',
            'isCorrect' => 1,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 2 correta-2
            'alternative' => 'Elogiar a pessoa',
            'isCorrect' => 1,
            'question_id' => 2,
        ]);

        // Pergunta 3
        DB::table('alternatives')->insert([ // Pergunta Empatia 3 errada-1
            'alternative' => 'Fazer cara feia',
            'isCorrect' => 0,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 3 errada-2
            'alternative' => 'Não gostei',
            'isCorrect' => 0,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 3 errada-3
            'alternative' => 'Jogar o presente fora',
            'isCorrect' => 0,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 3 correta-1
            'alternative' => 'Obrigado! Vocês ficariam chateados se eu trocasse?',
            'isCorrect' => 1,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 3 correta-2
            'alternative' => 'Obrigado! Mas não gostei muito do modelo. Dá para trocar?',
            'isCorrect' => 1,
            'question_id' => 3,
        ]);

        // Pergunta 4
        DB::table('alternatives')->insert([ // Pergunta Empatia 4 errada-1
            'alternative' => 'Não dizer nada',
            'isCorrect' => 0,
            'question_id' => 4,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 4 errada-2
            'alternative' => 'Ofender ele',
            'isCorrect' => 0,
            'question_id' => 4,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 4 errada-3
            'alternative' => 'Dizer que outra coisa é mais importante',
            'isCorrect' => 0,
            'question_id' => 4,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 4 correta-1
            'alternative' => 'Feliz aniversário!',
            'isCorrect' => 1,
            'question_id' => 4,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 4 correta-2
            'alternative' => 'Parabéns!',
            'isCorrect' => 1,
            'question_id' => 4,
        ]);

        // Pergunta 5
        DB::table('alternatives')->insert([ // Pergunta Empatia 5 errada-1
            'alternative' => 'Apenas comer',
            'isCorrect' => 0,
            'question_id' => 5,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 5 errada-2
            'alternative' => 'Se virar',
            'isCorrect' => 0,
            'question_id' => 5,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 5 errada-3
            'alternative' => 'Negar dividir',
            'isCorrect' => 0,
            'question_id' => 5,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 5 correta-1
            'alternative' => 'Dividir com ele',
            'isCorrect' => 1,
            'question_id' => 5,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Empatia 5 correta-2
            'alternative' => 'Oferecer algo a ele',
            'isCorrect' => 1,
            'question_id' => 5,
        ]);

        /*
        Perguntas Cotidiano
        */

       // Pergunta 1
        DB::table('alternatives')->insert([ // Pergunta Cotidiano 1 errada-1
            'alternative' => 'Não ajudar em nada',
            'isCorrect' => 0,
            'question_id' => 6,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 1 errada-2
            'alternative' => 'Fingir que não escutou',
            'isCorrect' => 0,
            'question_id' => 6,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 1 errada-3
            'alternative' => 'Gritar com quem te pediu ajuda',
            'isCorrect' => 0,
            'question_id' => 6,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 1 correta-1
            'alternative' => 'Fazer sua parte e quando se sentir cansado pedir ajuda',
            'isCorrect' => 1,
            'question_id' => 6,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 1 correta-1
            'alternative' => 'Conversar com seus pais sobre',
            'isCorrect' => 1,
            'question_id' => 6,
        ]);

        // Pergunta 2
        DB::table('alternatives')->insert([ // Pergunta Cotidiano 2 errada-1
            'alternative' => 'Gritar e quebrar as coisas',
            'isCorrect' => 0,
            'question_id' => 7,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 2 errada-2
            'alternative' => 'Ser agressivo com outras pessoas',
            'isCorrect' => 0,
            'question_id' => 7,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 2 errada-3
            'alternative' => 'Sair correndo sem avisar ninguém',
            'isCorrect' => 0,
            'question_id' => 7,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 2 correta-1
            'alternative' => 'Pedir ajuda para alguém de confiança',
            'isCorrect' => 1,
            'question_id' => 7,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 2 correta-2
            'alternative' => 'Ir para outro lugar junto ao seus pais',
            'isCorrect' => 1,
            'question_id' => 7,
        ]);

        // Pergunta 3
        DB::table('alternatives')->insert([ // Pergunta Cotidiano 3 errada-1
            'alternative' => 'Ficar bravo',
            'isCorrect' => 0,
            'question_id' => 8,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 3 errada-2
            'alternative' => 'Sair correndo',
            'isCorrect' => 0,
            'question_id' => 8,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 3 errada-3
            'alternative' => 'Xingar os amigos',
            'isCorrect' => 0,
            'question_id' => 8,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 3 correta-1
            'alternative' => 'Conversar com eles para jogar cartas em outro momento',
            'isCorrect' => 1,
            'question_id' => 8,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 3 correta-2
            'alternative' => 'Achar uma terceira opção que possa agradar a todos',
            'isCorrect' => 1,
            'question_id' => 8,
        ]);

        // Pergunta 4
        DB::table('alternatives')->insert([ // Pergunta Cotidiano 4 errada-1
            'alternative' => 'Inventar uma mentira',
            'isCorrect' => 0,
            'question_id' => 9,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 4 errada-2
            'alternative' => 'Empurrar a pessoa',
            'isCorrect' => 0,
            'question_id' => 9,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 4 errada-3
            'alternative' => 'Gritar com a pessoa',
            'isCorrect' => 0,
            'question_id' => 9,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 4 correta-1
            'alternative' => 'Responder com calma: "Não Obrigado."',
            'isCorrect' => 1,
            'question_id' => 9,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 4 correta-2
            'alternative' => 'Recusar amigávelmente',
            'isCorrect' => 1,
            'question_id' => 9,
        ]);

        // Pergunta 5
        DB::table('alternatives')->insert([ // Pergunta Cotidiano 5 errada-1
            'alternative' => 'Ignora o vendedor',
            'isCorrect' => 0,
            'question_id' => 10,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 5 errada-2
            'alternative' => 'Se esconder do vendedor',
            'isCorrect' => 0,
            'question_id' => 10,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 5 errada-3
            'alternative' => 'Sair correndo',
            'isCorrect' => 0,
            'question_id' => 10,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 5 correta-1
            'alternative' => 'Dar bom dia e falar o que veio comprar',
            'isCorrect' => 1,
            'question_id' => 10,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Cotidiano 5 correta-2
            'alternative' => 'Responder amigávelmente com oi e dizer o que procura',
            'isCorrect' => 1,
            'question_id' => 10,
        ]);

        /*
        Perguntas Sentimentos
        */

       // Pergunta 1
        DB::table('alternatives')->insert([ // Pergunta Sentimentos 1 errada-1
            'alternative' => 'Ser rude com outra pessoa',
            'isCorrect' => 0,
            'question_id' => 11,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 1 errada-2
            'alternative' => 'Gritar ',
            'isCorrect' => 0,
            'question_id' => 11,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 1 errada-3
            'alternative' => 'Se machucar',
            'isCorrect' => 0,
            'question_id' => 11,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 1 correta-1
            'alternative' => 'Tomar um copo de água para se acalmar',
            'isCorrect' => 1,
            'question_id' => 11,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 1 correta-2
            'alternative' => ' Respire fundo e procure um local mais calmo',
            'isCorrect' => 1,
            'question_id' => 11,
        ]);

        // Pergunta 2
        DB::table('alternatives')->insert([ // Pergunta Sentimentos 2 errada-1
            'alternative' => 'Se trancar no quarto sozinho',
            'isCorrect' => 0,
            'question_id' => 12,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 2 errada-2
            'alternative' => 'Sair sem avisar ninguém',
            'isCorrect' => 0,
            'question_id' => 12,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 2 errada-3
            'alternative' => 'Se machucar',
            'isCorrect' => 0,
            'question_id' => 12,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 2 correta-1
            'alternative' => 'Desabafar com outra pessoa',
            'isCorrect' => 1,
            'question_id' => 12,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 2 correta-2
            'alternative' => 'Fazer uma atividade que gosta, como desenhar ou ver filmes',
            'isCorrect' => 1,
            'question_id' => 12,
        ]);

        // Pergunta 3
        DB::table('alternatives')->insert([ // Pergunta Sentimentos 3 errada-1
            'alternative' => 'Fazer xixi na cama',
            'isCorrect' => 0,
            'question_id' => 13,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 3 errada-2
            'alternative' => 'Se esconder',
            'isCorrect' => 0,
            'question_id' => 13,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 3 errada-3
            'alternative' => 'Pedir aos pais para não sair de casa, aos prantos',
            'isCorrect' => 0,
            'question_id' => 13,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 3 correta-1
            'alternative' => 'Conversar com os pais ou professora',
            'isCorrect' => 1,
            'question_id' => 13,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 3 correta-2
            'alternative' => 'Desenhe ou escreva o que está sentindo',
            'isCorrect' => 1,
            'question_id' => 13,
        ]);

        // Pergunta 4
        DB::table('alternatives')->insert([ // Pergunta Sentimentos 4 errada-1
            'alternative' => 'Ficar chorando',
            'isCorrect' => 0,
            'question_id' => 14,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 4 errada-2
            'alternative' => 'Tomar um remédio sem a supervisão de um adulto',
            'isCorrect' => 0,
            'question_id' => 14,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 4 errada-3
            'alternative' => 'Ficar mexendo no machucado',
            'isCorrect' => 0,
            'question_id' => 14,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 4 correta-1
            'alternative' => 'Pedir ajuda para algum adullto',
            'isCorrect' => 1,
            'question_id' => 14,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 4 correta-2
            'alternative' => 'Mostrar o ferimento para alguém',
            'isCorrect' => 1,
            'question_id' => 14,
        ]);

        // Pergunta 5
        DB::table('alternatives')->insert([ // Pergunta Sentimentos 5 errada-1
            'alternative' => 'Ficar desanimado',
            'isCorrect' => 0,
            'question_id' => 15,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 5 errada-2
            'alternative' => 'Tampar o rosto com a mão',
            'isCorrect' => 0,
            'question_id' => 15,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 5 errada-3
            'alternative' => 'Começa a imitar oque as pessoas falam',
            'isCorrect' => 0,
            'question_id' => 15,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 5 correta-1
            'alternative' => 'Respire fundo, e volte a fazer oque estava fazendo',
            'isCorrect' => 1,
            'question_id' => 15,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Sentimentos 5 correta-2
            'alternative' => 'Admita o que você está sentindo,para seus pais ou amigos',
            'isCorrect' => 1,
            'question_id' => 15,
        ]);

        /*
        Perguntas Higiene
        */

        // Pergunta 1
        DB::table('alternatives')->insert([ // Pergunta Higiene 1 errada-1
            'alternative' => 'Falar agressivamente "banheiro, agora!"',
            'isCorrect' => 0,
            'question_id' => 16,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 1 errada-2
            'alternative' => 'Ir ao banheiro sem dizer nada',
            'isCorrect' => 0,
            'question_id' => 16,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 1 errada-3
            'alternative' => 'Não fazer nada e segurar até voltar para casa',
            'isCorrect' => 0,
            'question_id' => 16,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 1 correta-1
            'alternative' => 'Você poderia me dizer onde fica o banheiro?',
            'isCorrect' => 1,
            'question_id' => 16,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 1 correta-2
            'alternative' => 'Dizer "com liçenca, preciso usar o banheiro"',
            'isCorrect' => 1,
            'question_id' => 16,
        ]);

        // Pergunta 2
        DB::table('alternatives')->insert([ // Pergunta Higiene 2 errada-1
            'alternative' => 'Sujar o banheiro',
            'isCorrect' => 0,
            'question_id' => 17,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 2 errada-2
            'alternative' => 'Se trancar no banheiro',
            'isCorrect' => 0,
            'question_id' => 17,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 2 errada-3
            'alternative' => 'Deixar a torneira ligada',
            'isCorrect' => 0,
            'question_id' => 17,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 2 correta-1
            'alternative' => 'Lavar a mão depois de usar o banheiro',
            'isCorrect' => 1,
            'question_id' => 17,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 2 correta-2
            'alternative' => 'Dar descarga depois de usar o banheiro',
            'isCorrect' => 1,
            'question_id' => 17,
        ]);

        // Pergunta 3
        DB::table('alternatives')->insert([ // Pergunta Higiene 3 errada-1
            'alternative' => 'Faz birra',
            'isCorrect' => 0,
            'question_id' => 18,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 3 errada-2
            'alternative' => 'Grita com a sua mãe',
            'isCorrect' => 0,
            'question_id' => 18,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 3 errada-3
            'alternative' => 'Ignora sua mãe',
            'isCorrect' => 0,
            'question_id' => 18,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 3 correta-1
            'alternative' => 'Responde que irá tomar o banho agora mesmo',
            'isCorrect' => 1,
            'question_id' => 18,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 3 correta-2
            'alternative' => 'Assim que terminar o que está fazendo vai tomar banho',
            'isCorrect' => 1,
            'question_id' => 18,
        ]);

        // Pergunta 4
        DB::table('alternatives')->insert([ // Pergunta Higiene 4 errada-1
            'alternative' => 'Apenas ignorar',
            'isCorrect' => 0,
            'question_id' => 19,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 4 errada-2
            'alternative' => 'Tossir em direção a uma pessoa',
            'isCorrect' => 0,
            'question_id' => 19,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 4 errada-3
            'alternative' => 'Não fazer nada',
            'isCorrect' => 0,
            'question_id' => 19,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 4 correta-1
            'alternative' => 'Colocar a mão sobre a boca',
            'isCorrect' => 1,
            'question_id' => 19,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 4 correta-2
            'alternative' => 'Usar uma máscara',
            'isCorrect' => 1,
            'question_id' => 19,
        ]);

        // Pergunta 5
        DB::table('alternatives')->insert([ // Pergunta Higiene 5 errada-1
            'alternative' => 'Sair correndo',
            'isCorrect' => 0,
            'question_id' => 20,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 5 errada-2
            'alternative' => 'Não fazer o que ela pediu',
            'isCorrect' => 0,
            'question_id' => 20,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 5 errada-3
            'alternative' => 'Dizer que está bem assim',
            'isCorrect' => 0,
            'question_id' => 20,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 5 correta-1
            'alternative' => 'Escovar os dentes',
            'isCorrect' => 1,
            'question_id' => 20,
        ]);

        DB::table('alternatives')->insert([ // Pergunta Higiene 5 correta-2
            'alternative' => 'Usar palito de dente ou fio dental',
            'isCorrect' => 1,
            'question_id' => 20,
        ]);
    }
}
