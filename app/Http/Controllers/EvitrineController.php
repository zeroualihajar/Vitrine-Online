<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Article;


class EvitrineController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        //----- systeme de pagination -------
        $articles = Article::paginate(4);
        return view('evitrine' , compact('categories', 'articles'));
    }
    public function articles($id)
    {
        $articles = Categorie::find($id)->articles;
        $categories = Categorie::all();
        return view('catVitrine' , compact('articles' , 'categories'));
    }
    public function detail($id)
    {
        $article = Article::find($id);
        $categories = Categorie::all();
        return view('detail',compact('article' , 'categories'));
    }
}
