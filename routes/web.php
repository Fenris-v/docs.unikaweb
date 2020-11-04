<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\SolutionsController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['auth', 'admin.panel'])->prefix('admin')->group(
    function () {
        Route::get('/', [App\Http\Controllers\Admin\MainAdminController::class, 'index'])->name('admin');
    }
);

/** Решения */
Route::get('/', [SolutionsController::class, 'index'])->name('solution.index');
Route::get('/{solution}', [SolutionsController::class, 'show'])->name('solution.show');

/** Статьи */
Route::get('/{solution}/{article}', [ArticlesController::class, 'show'])->name('article.show');
Route::get('/{solution}/{article}/{article1?}', [ArticlesController::class, 'show'])->name('article.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
