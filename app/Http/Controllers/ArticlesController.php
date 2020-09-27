<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Solution;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ArticlesController extends Controller
{
    /**
     * Статья или вложенная статья
     *
     * @param Solution $solution
     * @param Article $article
     * @param Article|null $article1
     * @return Application|Factory|Response|View
     */
    public function show(Solution $solution, Article $article, Article $article1 = null)
    {
        $menu = Article::noParents()->get();

        $submenu = [];
        if (isset($article1)) {
            $submenu = $article->getChildren();
        } elseif ($article->hasChildren()) {
            $submenu = $article->getChildren();
        }

        return view('article.index', compact('solution', 'article', 'article1', 'menu', 'submenu'));
    }
}
