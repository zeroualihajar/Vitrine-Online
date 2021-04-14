@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
<h1 class="p-2" style=" color: #301b3f">Ajouter un article</h1>
</div>

@if($errors->any())
<div class="alert alert-danger col-8 offset-2">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="d-flex justify-content-center">
 <div class="container col-6  ">
    <div class="jumbotron d-flex justify-content-center text-black" style="background: #301b3f; color: #e7d9ea">
        <form class="form" method="POST" action="{{ route('article.save') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row form-inline">
        <label >Code article</label>
        <input type="text" name="codeArt" class="form-control offset-2 col-lg" required></br>
        </div>

        <div class="form-group row form-inline">
                <label class="mr-3">Catégorie</label>
                <select class="form-control offset-2 col-lg" name="nomCat" >
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->nomCat }}</option>
                @endforeach
                </select>
                @error('categorie')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
        </div>

        <div class="form-group row form-inline  ">
        <label>Nom article</label>
        <input type="text" name="nomArt" class="form-control offset-2 col-lg" required>
        </div>

        <div class="form-group row form-inline">
        <label class="mr-3">PU</label>
        <input type="text" name="pu" class="form-control offset-3 col-lg" required>
        </div>

        <div class="form-group row form-inline">
        <label class="mr-3">Quantité</label>
        <input type="text" name="quantite" class="form-control offset-2 col-lg" required>
        </div>

        <div class="form-group row form-inline">
        <label class="mr-3">Garantie</label>
        <input type="text" name="garantie" class="form-control offset-2 col-lg" >
        </div>

        <div class="form-group row form-inline">
        <label class="mr-3">Délai </label>
        <input type="text" name="delai" class="form-control offset-2 col-lg" style="margin-left: 21%">
        </div>

        <div class="form-group row form-inline">
        <label  class="mr-3">Jours livraison</label>
        <input type="text" name="joursLivraison" class="form-control offset-1 col-lg" >
        </div>

        <div class="form-group row form-inline">
        <label class="mr-3">Prix livraison</label>
        <input type="text" name="prixLivraison"  class="form-control  offset-1 col-lg" style="margin-left: 10%">
        </div>

        <div class="form-group row form-inline">
        <label>Description</label>
        <textarea class="form-control offset-2 col-lg" name="description" style="margin-left: 15%" rows="5" required></textarea>
        </div>

        <div class="form-group row form-inline">
            <label class="mr-3">Choisir une image</label>
            <input type="file" class="form-control offset col-lg" style="margin-left: 2%" name="image" >
        </div>
        </br>
        
        <div class="d-flex justify-content-center mb-2 offset-5">
            <button type="submit" class="btn btn  " id="bto" style="margin-right: 1%">Ajouter</button>
            <button class="btn btn  " id="bto">
                <a href="http://localhost/evitrine/public/articles">Revenir en arrière </a>
            </button>
        </div>

        </form>

    </div>
 </div>

</div>

@endsection
