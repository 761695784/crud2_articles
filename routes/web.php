<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/liste', [ ArticlesController:: class,'liste' ]);
Route::get('/ajouter', function () {
    return view('Articles.ajouter');});
Route::POST('/ajouter/traitement', [ArticlesController::class, 'ajouter_Articles_traitement']);
Route::get('/modifier_article/{id}', [ArticlesController::class, 'modifier_article']);
Route::POST('/modifier/traitement', [ArticlesController::class, 'modifier_Articles_traitement']);