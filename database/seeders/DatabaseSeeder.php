<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                SolutionSeeder::class,
                ArticleSeeder::class,
                ArticleSolutionSeeder::class,
                GroupSeeder::class,
                UserSeeder::class,
                GroupUserSeeder::class
            ]
        );
    }
}
