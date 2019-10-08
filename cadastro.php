<!DOCTYPE html>
<html>
<head>
	<title>E-Recycle - Cadastro</title>
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
				</div>
			</nav>
		</div>
	</div>
	</div>

	<div class="border_tittle">Cadastro</div>
	<div class="cadastro_login">
		<div class="container" >
			<div class="row">
				<div class="form-row">
					<div class="form-group col-sm-12">
						<center>
							<form action="" method="POST">
								<legend>Qual seu tipo de usuário?</legend>
								<label>Coletor</label>&nbsp;<input type="radio" name="check" value="coletor" required>
								&nbsp;<label>Cliente</label>&nbsp;<input type="radio" name="check" value="cliente" required> 
								<br>
								<button class='btn btn-success' name='btnContinuar'> Continuar </button>
								<br>
							</form>
						</center>	
						<?php 
							include "include/cadastro.php";
						?>
					</div>			
				</div>
			</div>
		</div>
	</div>	
	<footer id="rodape" style="position: fixed;">
		&copy; 2019 Copyright - Todos os direitos reservados. Site by <i>E-Recycle</i>.
	</footer>
</body>
</html>