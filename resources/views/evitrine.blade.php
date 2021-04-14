
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
		<!-- <link rel="stylesheet" href="http://localhost/evitrine/public/css/main.css" /> -->
		<link href="{{ 'css/main.css' }}" rel="stylesheet">
	</head>
	<body style="background: #e7d9ea">

		<!-- Header -->
		<header id="header"  style="color: #e7d9ea" class="alt" >
				<div class="logo" ><a href="/">Evitrine</a></div>
				<a href="#menu" ><i class="fas fa-bars"></i>Catégorie</a>
   		</header>

		<!-- Nav -->
		<nav id="menu">
			<ul class="links">
				@foreach($categories as $categorie)
				<li  style="color: #e7d9ea"><a href="http://localhost/evitrine/public/articles/categorie/{{ $categorie->id }}">{{$categorie->nomCat}}</a></li>
				@endforeach
			</ul>
        </nav>

		<!-- Banner -->
		<section class="banner full">
			<article>
				<img src="css/images/mode.jpg" alt="not found" />
				<div class="inner">
					<header>
						<h2>Mode</h2>
					</header>
				</div>
			</article>
			<article>
				<img src="css/images/livre.jpg" alt="not found" />
				<div class="inner">
					<header>
						<h2>Livres</h2>
					</header>
				</div>
			</article>
			<article>
				<img src="css/images/sport.png"  alt="not found" />
				<div class="inner">
					<header>
						<h2>Sport</h2>
					</header>
				</div>
			</article>
		</section>
					
		<section id="one" class="wrapper style2" style="background: #e7d9ea; ">
            <!-- One -->
			<div class="inner">
				<div class="grid-style">
                    @foreach($articles as $article)
						<div>
							
							<div class="box " style="border: solid 2px #301b3f; background: #f5eaf7">
							<br>	
							<div class="image fit">
									<img src="{{ asset('/uploads/articles/' . $article->image) }}" alt="not found" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>Catégorie</p>
										<h2>{{ $article->categorie->nomCat}}</h2>
									</header>
									<p>{{ $article->nomArt }}</p>
                                    <h5>{{ $article->pu }} Dhs</h5>
									<footer class="align-center">
										<a href="http://localhost/evitrine/public/article/{{ $article->id }}/detail" class="button" style="background: #301b3f; color: #e7d9ea">Détail</a>
									</footer>
								</div>
                            </div>
                            </br>
						</div>
                        @endforeach
					</div>
                </div>
                <div class="row ">
					<div class="col-md-12 d-flex justify-content-center">
						{!! $articles->render() !!}
					</div>
    			</div>
            </section>
		
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

