<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'daniel',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'derik',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'paula',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'isabel',
            'password' => Hash::make('12345678'),
        ]);
    }
}
