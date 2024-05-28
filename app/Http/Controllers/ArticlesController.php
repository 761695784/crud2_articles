<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function liste (){
        return view('Articles.liste');
    }
}
