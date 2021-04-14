<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategorieController extends Controller
{
    public function index(Request $request)
    {
        return view('categories.categories');

    }
    //--- lister les catégories ---
    public function list()
    {
          $categories = Categorie::all();
          return view('categories.categories', ['categories' => $categories]);
    }
    //----- enregistrer les données dans la BDD ---
    public function save(Request $request)
    {
        $categorie = new Categorie;
        $categorie->nomCat = $request->input('nomCat');
        $categorie->user_id = auth()->user()->id;
        $categorie->save();
        return redirect('categories');
    }
     //---- Modifier une catégorie --------
     public function edit($id)
     {
         $categorie = Categorie::find($id);
         return view('categories.edit', ['categorie' => $categorie]);
     }
     //--- Enregistrer les modifications ---------
     public function update(Request $request, $id)
     {
         $categorie = Categorie::find($id);
         $categorie->nomCat = $request->input('nomCat');
        $categorie->save();
         return redirect('categories');
     }
    //------- Supprimer une catégorie -----
    public function delete($id)
    {
            $categorie = Categorie::find($id);
            $categorie->delete();
           return redirect('categories');
    }

 }
