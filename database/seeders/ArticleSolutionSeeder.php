<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Solution;
use Illuminate\Database\Seeder;

class ArticleSolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = Article::pluck('id')->toArray();
        foreach (Solution::all() as $solution) {
            $solution->articles()->attach($articles);
        }
    }
}
