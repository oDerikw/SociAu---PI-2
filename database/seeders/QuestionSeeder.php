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
            'question' => 'Pergunta da categoria empatia',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'ERROOOU!',
            'category' => 'empatia',
            'user_id' => 1,
        ]);
            
        DB::table('questions')->insert([
            // Cotidiano
            'question' => 'Pergunta da categoria cotidiano',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Incorreto',
            'category' => 'empatia',
            'user_id' => 1,
        ]);

        DB::table('questions')->insert([    
            // Sentimentos
            'question' => 'Pergunta da categoria sentimentos',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'Não está certo',
            'category' => 'sentimentos',
            'user_id' => 1,
        ]);

        DB::table('questions')->insert([    
            // Higiene
            'question' => 'Pergunta da categoria higiene',
            'image' => 'images/X2HRr7ePVOv4ZNkkHsAKHNe1swHakGK2mxprsK5b.png',
            'explanation' => 'YAYAYAYAYA',
            'category' => 'higiene',
            'user_id' => 1,
        ]);
    }
}
