@extends('backend')
@section('content')

<div class="d-flex justify-content-center">
<h1 class="p-2" style=" color: #301b3f">Gestion des Articles</h1>
</div>

</br>
<div class="table-responsive text-nowrap container-fluid ">
    <table class="table text-center table-striped ">
        <thead>
        <tr style="background: #301b3f; color: #e7d9ea">
            <th>ID</th>
            <th>Code</th>
            <th>Catégorie</th>
            <th>Nom</th>
            <th>PU</th>
            <th>Quantité</th>
            <th>Garantie</th>
            <th>Délai</th>
            <th>Jours de livraison</th>
            <th>Prix de livraison</th>
            <th>Description</th>
            <th>User</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody class="bg-white">
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->codeArt }}</td>
                    <td>{{ $article->categorie->nomCat }}</td>
                    <td>{{ $article->nomArt }}</td>
                    <td>{{ $article->pu }}</td>
                    <td>{{ $article->quantite }}</td>
                    <td>{{ $article->garantie }}</td>
                    <td>{{ $article->delai }}</td>
                    <td>{{ $article->joursLivraison }}</td>
                    <td>{{ $article->prixLivraison }}</td>
                    <td>{{ $article->description }}</td>
                    <td>{{ $article->user_id }}</td>

                    <td><img src="{{ asset('/uploads/articles/' . $article->image) }}" width="100px;" height="100px" alt="Image"> </td>

                    <td>
                        <a href="{{ route('article.edit', $article->id ) }}" class="btn btn" style="background: #1e6f5c"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('article.delete', $article->id ) }}" class="btn btn" style="background: #046582"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    </br>

    <div class="d-flex justify-content-center">

        <button type="submit" class="btn btn " style="margin-right: 1%" id="btio">
            <a href="http://localhost/evitrine/public/articles/create "class="btn btn-sm">Ajouter Article</a>
        </button>  
        <button class="btn btn" id="btio">
            <a href="http://localhost/evitrine/public/home" class="btn btn-sm ">Revenir en arrière </a>
        </button>
    </div>




    
</div>
@endsection
