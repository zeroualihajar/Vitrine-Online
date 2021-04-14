<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Détails</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="http://localhost/evitrine/public/css/main.css" />
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
	</head>
	<body class="subpage" style="background: #e7d9ea; ">

		<!-- Header -->
			<header id="header" style="background: #301b3f">
				<div class="logo"><a href="http://localhost:8000">Evitrine</a></div>
				<a href="#menu" ><i class="fas fa-bars"></i>Catégorie</a>
			</header>

		<!-- Nav -->
			<nav id="menu" style="background: #301b3f">
				<ul class="links">
                    @foreach($categories as $categorie)
                    <li><a href="http://localhost/evitrine/public/articles/categorie/{{ $categorie->id }}">{{$categorie->nomCat}}</a></li>
                    @endforeach
				</ul>
            </nav>

<div class="container">

  <h1  style="color: #301b3f;">{{ $article->nomArt }}</h1>
</br>
</br>
  <div class="row">
    <div class="col-md-8" >
      <img class="img-fit" src="{{ asset('/uploads/articles/' . $article->image) }}" alt="" style="border: solid 2px #f25287">
    </div>

    <div class="col-md-4">
      <h2 class="my-3" text-black style="color: #301b3f">Details</h2>
      <ul >
		<li> <h6 class="my-3" style="color: #301b3f">Description : {{ $article->description }}</h6></li>
        <li> <h6 class="my-3" style="color: #301b3f">Quantité restante : {{ $article->quantite }}</h6></li>
        <li> <h6 class="my-3" style="color: #301b3f">Livraison dans {{ $article->joursLivraison }} jours</h6></li>
        <li> <h6 class="my-3" style="color: #301b3f">Prix de la livraison : {{ $article->prixLivraison }} Dhs</h6></li>
        <li> <h6 class="my-3" style="color: #301b3f">Garantie : {{ $article->garantie }} jours</h6></li>
		<li> <h6 class="my-3" style="color: #301b3f">Retour gratuit dans {{ $article->garantie }} jours</h6></li>
		<li> <h6 class="my-3" style="color: #301b3f">Prix : {{ $article->pu }}</h6></li>

      </ul>
    </div>

  </div>
</br>
</br>

</div>
	<!-- Footer -->
			<footer id="footer" style="background: #301b3f">
				<div class="container">
					<ul class="icons">
						<li><a href="https://twitter.com/" style="color: #e7d9ea"><i class="fab fa-twitter mx-1"></i></a></li>
						<li><a href="https://www.facebook.com/" style="color: #e7d9ea"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://www.instagram.com/" style="color: #e7d9ea"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
				<div class="copyright" style="color: #e7d9ea">
					&copy; Evitrine. All rights reserved.
				</div>
			</footer>




		<!-- Scripts -->
			<script src="http://localhost/evitrine/public/assets/js/jquery.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/jquery.scrollex.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/skel.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/util.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/main.js"></script>

	</body>
</html>