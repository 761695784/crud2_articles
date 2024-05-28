<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/liste', [ ArticlesController:: class,'liste' ]);
Route::get('/ajouter', function () {
    return view('Articles.ajouter');});