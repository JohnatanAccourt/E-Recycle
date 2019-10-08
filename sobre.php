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

	<img src="imagens/bannert.jpg" width="100%">
	<div id="fadeTitulo" class="title">
		Sobre Nós
	</div>
<div id="border" class="border_tittle">O que fazemos?</div>
	<center> 
		<div class="ladoalado">		
		 	<div class="TextFormate">
		 		<p>
		 			Quando falamos de “tecnologia” quase nunca relacionamos essa palavra com a natureza e muitos pensam que os dois não se combinam, engana-se quem pensa desta forma por que os dispositivos tecnológicos e a natureza tem muita proximidade assim como qualquer outra coisa que falarmos tem total relação com o meio ambiente, e sabendo que em toda parte do nosso planeta temos tecnologia e que grande parte das pessoas não sabem como que a tecnologia pode afetar negativamente nosso ecossistema criamos a E-Recycle.	<br><br><span style="font-size: 20px;"><i>"Relatório aponta que apenas 2% do lixo eletrônico brasileiro é reciclado"</i></span>
		 		</p>
		 		<p lass="TextFormate">	
					A E-Recycle é formada por um grupo de jovens cursando no Senac largo treze o curso técnico em tecnologia da informação, que fez esse projeto pensando muito além de conseguir uma boa nota ou um diploma, mas predisposto a conseguir alcançar o objetivo de levar informação e conscientização do descarte correto de lixos eletrônicos e sua importância de ser discutido na sociedade, porém esse era nosso pensamento a priori, conforme o decorrer do projeto vimos uma grande necessidade de tentar a levar ajuda para pessoas que tem como sua principal fonte de renda a coleta de lixos recicláveis, por isso criamos nossos aplicativos Web e mobile para que além de levar a conscientização possamos levar auxilio para aqueles nos ajuda a manter um ciclo de sustentabilidade em nosso planeta, por isso visamos continuar a levar compreensão do por que é tão importante descartar de forma correta lixos eletrônicos e qualquer outro tipo de lixo de origem reciclável, mas também mostrar quem pode te ajudar a levar esses componentes para locais específicos de descarte.
				</p>	
			</div>
		</div>
	</center>
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