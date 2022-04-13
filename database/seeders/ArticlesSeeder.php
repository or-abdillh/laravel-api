<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create nomrmaly rows
        DB::table('articles')->insert([
            'title' => 'How to use migrations and seeders laravel 9',
            'content' => 'Create migrations and seeders file using php artisan command'
        ]);

        //Define faker
        $faker = \Faker\Factory::create();

        //Generate 30 random rows
        for ($i = 0; $i < 30; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->sentence,
                'content' => $faker->paragraph
            ]);
        }
    }
}
