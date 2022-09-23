<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               DB::table('questions')->insert([
            // Empatia
            'question' => 'Se uma pessoa cai no chão na sua frente você deve:',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Você poderia oferecer ajuda ou pergutar se a pessoa está bem',
            'category' => 'empatia',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([
            // Empatia 2
            'question' => 'Se uma pessoa te faz um elogio carinhoso como você deve responder?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Uma boa opção seria agradecer ou elogiar a pessoa também',
            'category' => 'empatia',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([
            // Empatia 3
            'question' => 'Você ganhou um presente dos seus pais que não gostou, o que você diz?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Está tudo bem se não gostar do presente, mas é sempre bom agradecer',
            'category' => 'empatia',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([
            // Empatia 4
            'question' => 'É aniversário do seu amigo, o que você pode dizer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Seu amigo ficaria muito feliz se você o desejasse feliz aniversário',
            'category' => 'empatia',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([
            // Empatia 5
            'question' => 'Você está comendo ao lado de um amigo, o que você pode fazer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Se o seu amigo tiver olhando voce comer, seria uma boa alternativa dividir com ele ou perguntar se ele quer um pedaço.',
            'category' => 'empatia',
            'user_id' => 1,
        ]);
            
        DB::table('questions')->insert([
            // Cotidiano
            'question' => 'Quando você precisa ajudar em tarefas domésticas, o que você deve fazer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'É muito importante ajudar nas tarefas domésticas e você sempre pode pedir ajuda para algum adulto',
            'category' => 'cotidiano',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([
            // Cotidiano 2
            'question' => 'Se você está em um lugar com muitas pessoas e muito barulho e você começa a se sentir incomodado, o que você pode fazer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Estar com pessoas de confianças pode ajudar você a se sentir seguro e mais confortável',
            'category' => 'cotidiano',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([
            // Cotidiano 3
            'question' => 'Se você está com seus amigos e você quer jogar cartas mas eles querem jogar vídeo game, o que você pode fazer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'É importante respeitar a opinião dos seus amigos, mas vocês podem conversar e chegar numa solução boa para todos',
            'category' => 'cotidiano',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([
            // Cotidiano 4
            'question' => 'Quando alguém te oferece algo que você não quer, como uma comida, um brinquedo, como você deve agir?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Ser honesto é sempre a melhor opção, porem recuse gentilmente.',
            'category' => 'cotidiano',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([
            // Cotidiano 5
            'question' => 'O vendedor diz: "Bom dia, como posso ajudá-lo?" O que voce responde?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Perguntar o que deseja ao vendedor torna a compra mais rápida, evitando estresse desnecessario',
            'category' => 'cotidiano',
            'user_id' => 1,
        ]);

        DB::table('questions')->insert([    
            // Sentimentos
            'question' => 'Quando você está com raiva, como você deve agir?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Quando a irritação ameaçar tomar conta, respire fundo para acalmar a mente e tome um copo d\'água ',
            'category' => 'sentimentos',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([    
            // Sentimentos 2
            'question' => 'Quando você está triste, o que você pode fazer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'A tristeza muitas vezes resulta em sentir-se solitário, por isso é importante conversar com alguém de confiaça e fazer uma atividade que goste.',
            'category' => 'sentimentos',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([    
            // Sentimentos 3
            'question' => 'Quando você sente medo, o que você pode fazer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'O medo não é sinal de fraqueza.A escrita é uma ferramenta poderosa para organizar os seus pensamentos, emoções e medos',
            'category' => 'sentimentos',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([    
            // Sentimentos 4
            'question' => 'Você se machuca e sente  dor, o que você faz?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Quando você se machuca é essencial que mostre para um adulto, porque ele vai saber o que fazer para te ajudar',
            'category' => 'sentimentos',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([    
            // Sentimentos 5
            'question' => 'Quando você se sente envergonhado, o que você pode fazer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'É natural ficar envergonhado de vez em quando, respirar fundo é sempre uma boa opção para se sentir mais calmo.',
            'category' => 'sentimentos',
            'user_id' => 1,
        ]);

        DB::table('questions')->insert([    
            // Higiene
            'question' => 'Você está na casa de um amigo e precisa ir ao banheiro. O que você pode fazer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Tentar bloquear essa necessidade de ir ao banheiro pode piorar ainda mais o desconforto, então o ideal é pedir para usar o banheiro.',
            'category' => 'higiene',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([    
            // Higiene 2
            'question' => 'Ao ir ao banheiro, o que você precisa fazer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Em geral, você deve sempre lavar as mãos e dar descarga: antes e depois de usar o banheiro porque esse hábito pode prevenir doenças',
            'category' => 'higiene',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([    
            // Higiene 3
            'question' => 'Quando sua mãe pede para voce tomar banho. O que você faz?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'O ideal é tomar banho no momento que sua mãe diz, porque assim quando terminar pode voltar a fazer o que estava fazendo antes do banho,sem se preocupar.',
            'category' => 'higiene',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([    
            // Higiene 4
            'question' => 'Quando tossir ou espirrar, o que você deve fazer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Voce deve cobrir com as mão ou usar máscara, porque assim você protege as pessoas ao seu redor contra vírus como resfriado ou gripe.',
            'category' => 'higiene',
            'user_id' => 1,
        ]);
        DB::table('questions')->insert([    
            // Higiene 5
            'question' => 'Se sua mãe pedir para você escovar os dentes após as refeições, o que você deve fazer?',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Para garantir um sorriso bonito e saudável, é necessário escovar os dentes após cada refeição, e utilizar o fio dental.',
            'category' => 'higiene',
            'user_id' => 1,
        ]);
        
    }
}
