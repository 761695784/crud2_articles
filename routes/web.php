<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
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
Route::get('/supprimer_article/{id}', [ArticlesController::class, 'supprimer_article']);
Route::get('/details/{id}', [ArticlesController::class, 'details'])->name('details');
// Routes pour les commentaires
Route::get('/formComm', function () {
    return view('Articles.formComm');
})->name('comments.form');
Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');

Route::get('/comments{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::post('update/comment/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::get('delete/comment/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');