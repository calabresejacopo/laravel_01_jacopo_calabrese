<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/about-us', [PublicController::class, 'chisiamo']
)->name('chi-siamo');
Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');
Route::get('/articles',[ArticleController::class, 'articoli'])->name('articoli');
Route::get('/articles/dettaglioarticolo/{titolo}', [ArticleController::class, 'dettaglioArticolo']
)->name('dettaglio-articolo');
