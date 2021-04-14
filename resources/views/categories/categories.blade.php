@extends('backend')
@section('content')


<div class="d-flex justify-content-center">
<h1 class="p-2" style=" color: #301b3f">Gestion des Catégories</h1>
</div>
<div class="d-flex justify-content-center">
<form class="form-inline" method="POST" action="http://localhost/evitrine/public/categorie/save">
@csrf
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="nomCat"  placeholder="Nom du catégorie..." required>
    <!-- @error('nomCat')
    <p class="help is-danger">{{ $message }}</p>
    @enderror -->
  </div>
  <button type="submit" class="btn btn mb-2" id="btoo">Ajouter</button>
</form>

</div>
</br>
<div class="table-responsive text-nowrap container-fluid col-8">
    <table class="table text-center table-striped ">
        <thead >
        <tr style="background: #301b3f; color: #e7d9ea">
            <th>ID</th>
            <th>Nom du catégorie</th>
            <th style="width: 40%">Action</th>

        </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($categories as $categorie)
                <tr>
                    <td>{{ $categorie->id }}</td>
                    <td>{{ $categorie->nomCat }}</td>
                    <td>
                        <button type="submit" class="btn btn " style="background: #1e6f5c"><a href="http://localhost/evitrine/public/categorie/edit/{{ $categorie->id  }}" class="btn btn-sm"><i class="fas fa-edit"></i></a> </button>
                        <button type="submit" class="btn btn " style="background: #046582"><a href="http://localhost/evitrine/public/categorie/delete/{{ $categorie->id }}" class="btn btn-sm"><i class="far fa-trash-alt"></i></a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </br>
    <button type="submit" class="btn bt-btn offset mt-6 " id="btoo">
        <a href="http://localhost/evitrine/public/home" class="btn btn-sm" >Revenir en arrière</a></button>

</div>
@endsection
