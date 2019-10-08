 <!DOCTYPE html>
<html>
<head>
	<title>E-Recycle</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="imagens/E-RecycleLogo1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/script.js"></script>
</head>
<body>
	<?php 
		session_start();
		$_SESSION["user"] = "NULL";
	?>
	<div class="barFixed">
	<div class="border codrops-top">
		<span class="right"><a class="codrops-icon codrops-icon-drop" href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Cadastro</a></span>
		<span class="right"><a class="codrops-icon codrops-icon-drop" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></span>
	</div>
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
						<ul class="nav navbar-nav">
						<li><a href="home.php">Home</a></li>
						<li><a href="coletores.php">Coletores</a></li>
						<li><a href="tutoriais.php">Tutoriais</a></li>
						<li><a href="artigos.php">Artigos</a></li>
						<li><a href="sobre.php">Sobre nós</a></li>
					</ul>
					</ul>
					
				</div>
			</nav>
		</div>
	</div>
</div>
	
	
		<img src="imagens/banner.jpg" width="100%">

	<div id="fadeTitulo" class="title">
		<img style="width: 90%;" src="imagens/E-RecycleLogo.png">
	</div>

	<a href="#" class="float">
		<span style="margin-top: 38%;" class="glyphicon glyphicon-menu-up"></span>
	</a>

<div id="border" class="border_tittle">Coletores em Destaque</div>
	<div class="container">		
		<center>
	 		<?php 
	 			include "include/conexao.php";
				$sql = "SELECT * FROM COLETORES INNER JOIN IMAGENS WHERE COLETORES.AVALIACAO > 4.0 ORDER BY CODIGO DESC LIMIT 3";
	 			$result = $conn->query($sql);
	 			if ($result->num_rows > 0) {		
					while ($row = $result->fetch_assoc()) {
						include "include/rating.php";
						include "include/verificaImagemTrue.php";
					}
				} else {
					echo "<br><h1 style='color: white;'> NENHUM COLETOR COM DEVERAS AVALIÇÃO...</h1><br>";
				}	 
	 		?>
	 	</center>
	</div>

	<div id="border3" class="border_tittle">Nosso Aplicativo:</div>
	<br>
	<center>
		<div class="retangulo" style="display: inline-block;">
			<h1 id="tituloAPP">

				<b>E-Recycle App:</b> 
				<br><br>
				<p id="descricaoAPP" style="margin-bottom: 1%;">Se integre ainda mais conosco, baixe nosso aplicativo e venha nos ajudar a salvar o meio ambiente.</p>
				<a href="#"><img id="google" src="imagens/google.png"></a>


			</h1>
			<img id="movement" src="imagens/phone.png">

		</div>
	</center>
	<br>

	<div id="border4" class="border_tittle">Video sobre o projeto</div><br>
		<div class="video">
			
			<center><iframe width="70%" height="500" src="https://www.youtube.com/embed/Rh7yBlxI7LM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
			<br>

		</div>
	<footer id="rodape" style="background: white;">
		<h4 style="background-color: rgba(0,96,115,0.8);padding: 3px;"><i>Nós siga em nossas redes sociais</i></h4>
		<a href="https://www.facebook.com/E-RecycleOficial-105500277506213/?modal=admin_todo_tour" target='BLANK'><img src="imagens/logosRS/facebook.png"></a>
		<a href="https://www.instagram.com/erecycle.oficial/?hl=pt-br" target='BLANK'><img src="imagens/logosRS/insta.png"></a>
		<a href="https://twitter.com/OficialRecycle" target='BLANK'><img src="imagens/logosRS/tw.png"></a>
		<a href="https://www.youtube.com/channel/UCvuMqCBMhZvA6uj_0ZMrJKw/videos?view_as=subscriber" target='BLANK'><img src="imagens/logosRS/youtube.png"></a>
	</footer><br><br>
	<footer id="rodape" style="position: fixed;">
		&copy; 2019 Copyright - Todos os direitos reservados. Site by <i>E-Recycle</i>.
	</footer>
</body>
</html>