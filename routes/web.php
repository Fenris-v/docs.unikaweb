<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\SolutionsController;
use Illuminate\Support\Facades\Route;

/** Решения */
Route::get('/', [SolutionsController::class, 'index'])->name('solution.index');
Route::get('/{solution}', [SolutionsController::class, 'show'])->name('solution.show');

/** Статьи */
Route::get('/{solution}/{article}', [ArticlesController::class, 'show'])->name('article.show');
Route::get('/{solution}/{article}/{article1?}', [ArticlesController::class, 'show'])->name('article.show');
