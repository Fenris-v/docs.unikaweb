<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            'Общая документация',
            'Конфигурация',
            'Настройки сайта',
            'Обмен данными',
            'Интернет-магазин',
            'Создание раздела каталога и карточки товара',
            'Добавление информации на сайт',
            'SEO',
            'Отзывы'
        ];

        $test = [
            'test',
            'test1',
            'test2',
            'test3',
            'test4',
            'test5',
            'test6'
        ];

        foreach ($articles as $article) {
            Article::create(['name' => $article]);
        }

        foreach ($test as $article) {
            Article::create(['name' => $article, 'parent_id' => rand(1, 9)]);
        }
    }
}
