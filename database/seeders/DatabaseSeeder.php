<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdmTableSeeder;
use Database\Seeders\QuestionSeeder;
use Database\Seeders\AlternativesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdmTableSeeder::class,
            QuestionSeeder::class,
            AlternativesSeeder::class,
        ]);
    }
}
