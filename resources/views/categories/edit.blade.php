@extends('backend')
@section('content')

<div class="d-flex justify-content-center">
<h1 class="p-2" style=" color: #301b3f">Modifier la Catégorie</h1>
</div>

<form class="form-inline d-flex justify-content-center mt-5" method="POST" action="http://localhost/evitrine/public/categorie/update/{{ $categorie->id }}">
@csrf
@method('PUT')
  <div class="form-group mx-sm-3  ">
    <input type="text" class="form-control" name="nomCat" value="{{ $categorie->nomCat }}"  required>
  </div>
  <button type="submit" class="btn btn " id="btoo">Modifier</button>
</form>
@endsection

