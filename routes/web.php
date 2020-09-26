<?php

use App\Http\Controllers\SolutionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SolutionsController::class, 'index'])->name('solutions.index');
Route::get('/solution', [SolutionsController::class, 'index'])->name('solutions.index');
Route::resource('solution', SolutionsController::class)->except('index');
