<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Categorie;


class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.articles');
    }
    //--------- Créer article --------
    public function create()
    {
       $categories = Categorie::all();
        return view('articles.create', compact('categories'));
    }
    public function save(Request $request)
    {
        $article = new Article;
        $article->codeArt = $request->input('codeArt');
        $article->nomArt = $request->input('nomArt');
        $article->pu = $request->input('pu');
        $article->quantite = $request->input('quantite');
        $article->garantie = $request->input('garantie');
        $article->delai = $request->input('delai');
        $article->joursLivraison = $request->input('joursLivraison');
        $article->prixLivraison = $request->input('prixLivraison');
        $article->description = $request->input('description');

        $article->user_id = auth()->user()->id;
        $article->categorie_id = $request->get('nomCat');
        //---- enregistrer image -------
        if($request->hasfile('image') != null)
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/articles/', $filename);
            $article->image = $filename;
        }
        else{
          //  return $request;
            $article->image='';
        }
        $article->save();
        return redirect('articles');
    }
    //-------- lister -----------
    public function list()
    {
        $articles = Article::all();
        return view('articles.articles', ['articles' => $articles]);
    }
    //--------- modifier article ----------
    public function edit(Request $request, $id)
    {
        $article = Article::find($id);
       $categories = Categorie::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $article->codeArt = $request->input('codeArt');
        $article->nomArt = $request->input('nomArt');
        $article->pu = $request->input('pu');
        $article->quantite = $request->input('quantite');
        $article->garantie = $request->input('garantie');
        $article->delai = $request->input('delai');
        $article->joursLivraison = $request->input('joursLivraison');
        $article->prixLivraison = $request->input('prixLivraison');
        $article->description = $request->input('description');

        $article->categorie_id = $request->get('nomCat');

        //---- enregistrer image -------
        if($request->hasfile('image') != null)
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/articles/', $filename);
            $article->image = $filename;
        }
        else{
          //  return $request;
            $article->image='';
        }

        $article->save();
        return redirect('articles');
    }
    //---------- supprimer article ----------
    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('articles');
    }
}
