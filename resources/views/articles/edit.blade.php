@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
<h1 class="p-2">Modifier un article</h1>
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
    <div class="jumbotron d-flex justify-content-center bg-dark text-black">
        <form class="form" method="POST" action="{{ route('article.update' , $article->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group row form-inline">
        <label >Code article</label>
        <input type="text" name="codeArt" class="form-control offset-2 col-lg" value="{{ $article->codeArt }}"  required></br>
        </div>

        <div class="form-group row form-inline">
                <label class="mr-3">Catégorie</label>
                <select class="form-control offset-2 col-lg" name="nomCat" >
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}" {{ old('categorie_id', $article->categorie_id) == $categorie->id ? 'selected' : ''}} >{{ $categorie->nomCat }}</option>
                @endforeach
                </select>
                @error('categorie')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
        </div>

        <div class="form-group row form-inline  ">
        <label>Nom article</label>
        <input type="text" name="nomArt" class="form-control offset-2 col-lg" value="{{ $article->nomArt }}" required>
        </div>

        <div class="form-group row form-inline">
        <label class="mr-3">PU</label>
        <input type="text" name="pu" class="form-control offset-3 col-lg" value="{{ $article->pu }}" required>
        </div>

        <div class="form-group row form-inline">
        <label class="mr-3">Quantité</label>
        <input type="text" name="quantite" class="form-control offset-2 col-lg" value="{{ $article->quantite }}" required>
        </div>

        <div class="form-group row form-inline">
        <label class="mr-3">Garantie</label>
        <input type="text" name="garantie" class="form-control offset-2 col-lg" value="{{ $article->garantie }}" >
        </div>

        <div class="form-group row form-inline">
        <label class="mr-4">delai</label>
        <input type="text" name="delai" class="form-control offset-2 col-lg" value="{{ $article->delai }}" >
        </div>

        <div class="form-group row form-inline">
        <label  class="mr-5">Jours livraison</label>
        <input type="text" name="joursLivraison" class="form-control ml-3 col-lg" value="{{ $article->joursLivraison }}" >
        </div>

        <div class="form-group row form-inline">
        <label class="mr-5">Prix livraison</label>
        <input type="text" name="prixLivraison"  class="form-control ml-4  col-lg" value="{{ $article->prixLivraison }}" >
        </div>

        <div class="form-group row form-inline">
        <label>Description</label>
        <textarea class="form-control offset-2 col-lg"  name="description" rows="5" >{{ $article->description }}</textarea>
        </div>

        <div class="form-group row form-inline">
            <label class="mr-4">Choisir une image...</label>
            <input type="file" class="form-control col-lg" value="asset('uploads/articles/' .{{ $article->image }})" name="image">
            </br>
        </div>
        <img src="{{ asset('/uploads/articles/' . $article->image) }}" width="100px;" height="100px" alt="Image">

        <button type="submit" class="btn btn-primar mb-2 offset-6">Modifier</button>
        </form>

    </div>
 </div>

</div>

@endsection
