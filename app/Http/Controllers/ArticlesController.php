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

     public function ajouter_Articles_traitement(Request $request){

        $request->validate([
            'ImageArticle' =>'required',
            'TitreArticle' =>'required',
            'DescriptionArticle' =>'required',
            'PublicationDate' =>'required|date',
            'statut' =>'nullable',
        ]);
    
        $article = new Article();
        $article->ImageArticle = $request->ImageArticle;
        $article->TitreArticle = $request->TitreArticle;
        $article->DescriptionArticle = $request->DescriptionArticle;
        $article->PublicationDate = $request->PublicationDate;
        $article->statut = $request->has('statut');
        $article->save();
    
        return redirect('/ajouter')->with('status', 'article ajouté avec succès.');
    }

    public function modifier_Article($id){
        $articles = Article::find($id);
        return view('Articles.modifier_article', compact('articles'));
    }


    
}
