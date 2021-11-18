<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Ajax -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset ('/home/home.css') }}">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Genos:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
	<title>
		Pendataan Vaksinasi Desa Dadirejo
	</title>
	<style>
		@media (min-width: 992px) {
			.navbar-collapse {
				padding-left: 500px;
			}
		}
		.nav-link.active {
			color: black;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<!-- <div class="lingkaran" style="width: 40px; height: 40px; background: #000000; border-radius: 100%; margin: 5px 5px auto;">
			<span><img src="/images/logo-pati.png" alt="Logo" style="height: 30px; margin: 7px 8px;"></span>
		</div>
		<a class="navbar-brand">Desa Dadirejo</a> -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHome" aria-controls="navbarHome" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarHome">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="nav-home" style="font-family: 'Bebas Neue', cursive; font-size: 20px; letter-spacing: 2px;">
				<li class="nav-item">
					<a class="nav-link @if (request()->is('/')) active @endif" href="/" >Home 
						<!-- <span class="sr-only">(current)</span> -->
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link @if (request()->is('pendataan-vaksinasi')) active @endif" href="pendataan-vaksinasi" >Pendataan Vaksinasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link @if (request()->is('tentang-vaksin')) active @endif" href="tentang-vaksin" >Tentang Vaksin</a>
				</li>
				<li class="nav-item">
					<a class="nav-link @if (request()->is('petunjuk')) active @endif" href="/petunjuk" >Petunjuk</a>
				</li>
			</ul>
		</div>
	</nav>

	<center>
		<img src="/images/logo-pati.png" alt="Logo" style="height: 110px; margin-top: 20px;">
		<h3 style="font-family: 'Luckiest Guy', cursive;letter-spacing: 5px;">DESA DADIREJO</h3>
		<h4 style="font-family: 'Genos', sans-serif; letter-spacing: 5px;">Pendataan Vaksinasi</h4>
	</center>

	@yield('content')

	<footer style="font-weight: bolder; position: absolute; margin-top: 20px; color: black">
		<p>&copy;Desa Dadirejo. All Right Reserved. Develop and Create by Setiyoningsih.</p>
	</footer>


	<!-- Javascript -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>