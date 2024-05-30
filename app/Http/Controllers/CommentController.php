<?php
namespace App\Http\Controllers;

use Log;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //     public function formulComment(Request $request){
    //     $request->validate([
    //         'nom_complet_auteur' =>'required',
    //         'contenu' =>'required',
    //         'date_heure_creation' =>'required|date',
    //         'article_id' =>'required',
    //     ]);
    //     $comment = new Comment();
    //     $comment->nom_complet_auteur = $request->nom_complet_auteur;
    //     $comment->contenu = $request->contenu;
    //     $comment->date_heure_creation = now();
    //     $comment->article_id = $request->article_id;
    //     $comment->save();
    //     return redirect('/formComm')->with('status', 'commentaire ajouté avec succès.');
        
    // }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nom_complet_auteur' => 'required',
                'contenu' => 'required',
                'article_id' => 'required|exists:articles,id',
            ]);
            
            Comment::create([
                'nom_complet_auteur' => $validatedData['nom_complet_auteur'],
                'contenu' => $validatedData['contenu'],
                'date_heure_creation' => now(),
                'article_id' => $validatedData['article_id'],
            ]);

            return redirect()->back()
                             ->with('status', 'Commentaire ajouté avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()
                             ->withErrors(['error' => 'Une erreur s\'est produite lors de l\'ajout du commentaire.'])
                             ->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_complet_auteur' => 'required',
            'contenu' => 'required',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->update([
            'nom_complet_auteur' => $request->nom_complet_auteur,
            'contenu' => $request->contenu,
        ]);

      
        return redirect()->back()
        ->with('status', 'Commentaire modifié avec succès.');
    }



        public function edit(Comment $comment) {
            return view('comments.edit', compact('comment'));

        }

        public function destroy(Comment $comment) {
            $comment->delete();
            return redirect()->route('details', ['id' => $comment->article_id])
                             ->with('status', 'Commentaire supprimé avec succès.');
        }











}

