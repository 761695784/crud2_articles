<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    protected $fillable = [
        'nom_complet_auteur',
        'contenu',
        'date_heure_creation',
        'article_id',
        
    ];
   
 
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

   



}
