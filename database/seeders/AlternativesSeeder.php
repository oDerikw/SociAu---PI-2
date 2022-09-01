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
            'alternative' => 'EmpatiaErrada1',
            'isCorrect' => 0,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'EmpatiaErrada2',
            'isCorrect' => 0,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'EmpatiaErrada3',
            'isCorrect' => 0,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'EmpatiaCorreta1',
            'isCorrect' => 1,
            'question_id' => 1,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'EmpatiaCorreta2',
            'isCorrect' => 1,
            'question_id' => 1,
        ]);

        // Cotidiano
        DB::table('alternatives')->insert([
            'alternative' => 'CotidianoErrada1',
            'isCorrect' => 0,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'CotidianoErrada2',
            'isCorrect' => 0,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'CotidianoErrada3',
            'isCorrect' => 0,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'CotidianoCorreta1',
            'isCorrect' => 1,
            'question_id' => 2,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'CotidianoCorreta2',
            'isCorrect' => 1,
            'question_id' => 2,
        ]);

        // Sentimentos
        DB::table('alternatives')->insert([
            'alternative' => 'SentimentosErrada1',
            'isCorrect' => 0,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'SentimentosErrada2',
            'isCorrect' => 0,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'SentimentosErrada3',
            'isCorrect' => 0,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'SentimentosCorreta1',
            'isCorrect' => 1,
            'question_id' => 3,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'SentimentosCorreta2',
            'isCorrect' => 1,
            'question_id' => 3,
        ]);

        // Higiene
        DB::table('alternatives')->insert([
            'alternative' => 'HigieneErrada1',
            'isCorrect' => 0,
            'question_id' => 4,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'HigieneErrada2',
            'isCorrect' => 0,
            'question_id' => 4
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'HigieneErrada3',
            'isCorrect' => 0,
            'question_id' => 4,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'HigieneCorreta1',
            'isCorrect' => 1,
            'question_id' => 4,
        ]);

        DB::table('alternatives')->insert([
            'alternative' => 'HigieneCorreta2',
            'isCorrect' => 1,
            'question_id' => 4,
        ]);
    }
}
