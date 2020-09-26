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

        foreach ($articles as $article) {
            Article::create(['name' => $article]);
        }
    }
}
