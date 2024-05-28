<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function liste(){
        $articles = Article::all();
    
         return view('Articles.liste', compact('articles'));
     }

     public function ajouter(){
        return view('Articles.ajouter');
     }
    
}
