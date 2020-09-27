<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SolutionsController extends Controller
{
    /**
     * Главная
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $solutions = Solution::visible()->orderBy('name', 'asc')->get();

        return view('main.index', compact('solutions'));
    }

    /**
     * Страница решения
     *
     * @param Solution $solution
     * @return Application|Factory|Response|View
     */
    public function show(Solution $solution)
    {
        $articles = $solution->articles()->noParents()->get();

        return view('solution.index', compact('solution', 'articles'));
    }
}
