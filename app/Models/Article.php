<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'ImageArticle',
        'TitreArticle',
        'DescriptionArticle',
        'PublicationDate',
        'statut',
    ];


  //Permet de recuperer toutes les commentaires liés a un articles 
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }







}







