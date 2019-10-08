<!DOCTYPE html>
<html>
<head>
	<title>E-R - Página do usuário</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Allan|Just+Another+Hand|Patrick+Hand+SC&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="imagens/E-RecycleLogo1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style_PerfilUsu.css">
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

	<img src="imagens/bannerUsu.jpg" width="100%">	
	<div id="fadeTitulo" class="title">
		Área do Usuário
	</div>	

	<div id="border" class="border_tittle">Atualize suas Informações:</div>
	<?php  
		include "include/conexao.php";
		
		$ftBoll = false;

		include "include/trocarFoto.php";
	?>

	<div class="container" style="border-radius: 10px;background-color: #006073;padding: 15px">
		<form action="#" method="POST">
			
		<?php 
			include "include/atualizarInfo.php";

			$conn->close();
		?>

	</div>
	
		<br>
			<div><center><button name="btnAtt" class="btn btn-primary" disabled="true"><b>Salvar atualizações </b><span class="glyphicon glyphicon-save"></span></button></center></div>
		<br>
	</form>
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