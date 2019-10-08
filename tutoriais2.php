<!DOCTYPE html>
<html>
<head>
	<title>E-Recycle - Coletores</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Allan|Just+Another+Hand|Patrick+Hand+SC&display=swap" rel="stylesheet"> 
	<link rel="icon" type="image/png" href="imagens/E-RecycleLogo1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style_sobre.css">
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


	<div class="container">
		<div class="row">
			<div class="col-sm-16">
			<div class="TituloArtigo">
					<b><h1>Porta canetas</h1></b>
					<center><b><h2 class="SubTituloTutorial">Reutilize componentes e eletrônicos fazendo porta canetas.</h2></b></center>
				<div class="col-sm-16">
					<center>
						<img src="imagens/tutorial.jpg" width="35%" class="img-responsive">
					</center>
				</div>
			<div class="col-sm-16 TextForm">			 	

			 		<p>
			 			Para você fazer este porta canetas você precisará dos seguintes componetes.
			 			<br><br>
			 			<b>Ferramentas:<br></b>
			 				&nbsp;&nbsp;<i>Cola quente</i><br>
			 				&nbsp;&nbsp;<i>Tesoura</i><br><br>
			 			<b>Componentes recicláveis:<br></b>
			 				&nbsp;&nbsp;<i>Latinha de refrigerante, cerveja, suco, etc</i><br>
			 				&nbsp;&nbsp;<i>Teclas de teclado</i><br>
			 				&nbsp;&nbsp;<i><b>*opcional</b> Placa de circuito do teclado</i><br><br>
			 		</p>

			 		<p >	
						Para você começar a fazer, você precisa retirar as teclas do teclado <b>( *retire com cuidado para não danificar a tecla )</b>, logo após você pega a latinha e tira a parte de cima dela com a tesoura com cuidado para não se machucar <b>( *Crianças façam com a companhia de um adulto)</b>, feito a retirada de ambos, nós colocamos a placa de circuito sobre a latinha apenas por capricho <i>(* você podem forrar apenas com tinta ou outra coisa de sua preferência para dar uma melhor aparência)</i>.
					</p>			 	
					<p >
						Feito isso está na hora de você colar as teclas e novamente utilizar a imaginação para fazer um design de sua preferência, no utilizamos o recurso de colcoar uma tecla sim e outra não, para dar uma aparência <i>"xadrez"</i> para o objeto, mas vocês podem utilizar do recurso de formar palavras, ou de cobrir tudo com teclas, vai de seu gosto pessoal.
					</p>
					<br><br>
					<p><b><i>Autor: Danilo Almeida</b> feat.: Bruno Sales e Pedro Victor.</i></p>	
				</div>
			  </div>	
			</div>
		</div>
	</div>
<footer id="rodape" style="background: white;">
	<h4 style="background-color: rgba(0,96,115,0.8);padding: 3px;"><i>Nós siga em nossas redes sociais</i></h4>
	<a href="https://www.facebook.com/E-RecycleOficial-105500277506213/?modal=admin_todo_tour" target='BLANK'><img src="imagens/logosRS/facebook.png"></a>
	<a href="https://www.instagram.com/erecycle.oficial/?hl=pt-br" target='BLANK'><img src="imagens/logosRS/insta.png"></a>
	<a href="https://twitter.com/OficialRecycle" target='BLANK'><img src="imagens/logosRS/tw.png"></a>
	<a href="https://www.youtube.com/channel/UCvuMqCBMhZvA6uj_0ZMrJKw/videos?view_as=subscriber" target='BLANK'><img src="imagens/logosRS/youtube.png"></a>
</footer>
<footer id="rodape">
	&copy; 2019 Copyright - Todos os direitos reservados. Site by <i>E-Recycle</i>.
</footer>
</body>
</html>