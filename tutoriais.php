<!DOCTYPE html>
<html>
<head>
	<title>E-Recycle - Tutoriais</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Allan|Just+Another+Hand|Patrick+Hand+SC&display=swap" rel="stylesheet"> 
	<link rel="icon" type="image/png" href="imagens/E-RecycleLogo1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style_tutoriais.css">
	<script src="js/script.js"></script>
</head>
<body>
	<div class="barFixed">
	<?php 
		session_start();
		
		include "include/pagUsu.php";
	?>
	<div class="backgd container-fluid">
		<div class="rows">
			<nav class="navbar">
				<div class="navbar-header columns">
					<button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div>
						<a href="home.php"><img src="imagens/E-RecycleLogo.png" width="150"></a>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="home.php">Home</a></li>
						<li><a href="coletores.php">Coletores</a></li>
						<li><a href="tutoriais.php">Tutoriais</a></li>
						<li><a href="artigos.php">Artigos</a></li>
						<li><a href="sobre.php">Sobre nós</a></li>
					</ul>
					<a href="#" class="float">
						<span style="margin-top: 38%;" class="glyphicon glyphicon-menu-up"></span>
					</a>
				</div>
			</nav>
		</div>
	</div>
	</div>
		<img src="imagens/bannert.jpg" width="100%">
	<div id="fadeTitulo" class="title">
		Tutoriais
	</div>	
	<div id="border" class="border_tittle">&nbsp;
		Tutoriais em destaque:
	</div>
	<div class="container">		
		<div class="col-sm-6 ">
			<div class="artigo-lg">
				<div class="art_img">
				<a href="tutoriais2.php"><img src="imagens/tutorial.jpg"></a>
				</div>
				<div class="info">
					<div class="tittle"><a href="#">Como fazer um porta canetas</a></div>
					<p class="desc" style="display: block;">
						Reutilize lixos e deixe discorrer sua imaginação fazendo porta canetas.
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="artigo" id="artigo2">
				<div class="art_img">
				<img src="imagens/save-the-planet.jpg">
				</div>
				<div class="info">
					<div class="tittle"><a href="tutoriais2.php">Tutorial 2</a></div>
					<a style="text-decoration: none;" href="#"><p class="desc" id="desc2">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="artigo" id="artigo3">
				<div class="art_img">
				<img src="imagens/save-the-planet.jpg">
				</div>
				<div class="info">
					<div class="tittle"><a href="tutoriais2.php">Tutorial 3</a></div>
					<a style="text-decoration: none;" href="#"><p class="desc" id="desc3">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</p></a>
				</div>
			</div>
		</div>
	</div>
	


	<div id="border2" class="border_tittle"> Procure por mais tutoriais:</div>
	<div class="container">

			<div class="col-sm-6">
			<div class="artigo" id="artigo4">
				<div class="art_img">
				<img src="imagens/save-the-planet.jpg">
				</div>
				<div class="info">
					<div class="tittle"><a href="tutoriais2.php">Tutorial 4</a></div>
					<a style="text-decoration: none;" href="tutoriais2.php"><p class="desc" id="desc4">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</p></a>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="artigo" id="artigo5">
				<div class="art_img">
				<img src="imagens/save-the-planet.jpg">
				</div>
				<div class="info">
					<div class="tittle"><a href="tutoriais2.php">Tutorial 5</a></div>
					<a style="text-decoration: none;" href="tutoriais2.php"><p class="desc" id="desc5">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</p></a>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="artigo" id="artigo6">
				<div class="art_img">
				<img src="imagens/save-the-planet.jpg">
				</div>
				<div class="info">
					<div class="tittle"><a href="tutoriais2.php">Tutorial 6</a></div>
					<a style="text-decoration: none;" href="tutoriais2.php"><p class="desc" id="desc6">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</p></a>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="artigo" id="artigo7">
				<div class="art_img">
				<img src="imagens/save-the-planet.jpg">
				</div>
				<div class="info">
					<div class="tittle"><a href="tutoriais2.php">Tutorial 7</a></div>
					<a style="text-decoration: none;" href="tutoriais2.php"><p class="desc" id="desc7">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</p></a>
				</div>
			</div>
		</div>
	</div>	

	<br><br>
	<footer id="rodape" style="background: white;">
		<h4 style="background-color: rgba(0,96,115,0.8);padding: 3px;"><i>Nós siga em nossas redes sociais</i></h4>
		<a href="https://www.facebook.com/E-RecycleOficial-105500277506213/?modal=admin_todo_tour" target='BLANK'><img src="imagens/logosRS/facebook.png"></a>
		<a href="https://www.instagram.com/erecycle.oficial/?hl=pt-br" target='BLANK'><img src="imagens/logosRS/insta.png"></a>
		<a href="https://twitter.com/OficialRecycle" target='BLANK'><img src="imagens/logosRS/tw.png"></a>
		<a href="https://www.youtube.com/channel/UCvuMqCBMhZvA6uj_0ZMrJKw/videos?view_as=subscriber" target='BLANK'><img src="imagens/logosRS/youtube.png"></a>
	</footer><br><br>
	<footer style="position: fixed;z-index: 2;" id="rodape">
		&copy; 2019 Copyright - Todos os direitos reservados. Site by <i>E-Recycle</i>.
	</footer>
</body>
</html>