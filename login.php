<!DOCTYPE html>
<html>
<head>
	<title>E-Recycle - Login</title>
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
		
		include "include/pagUsu.php";
	?>
	<div class="barFixed">
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
	
	<div class="border_tittle">Login</div>
	<div class="cadastro_login">
		<div class="container" >
			<div class="row" style="margin-top: 130px;">
				<form action="" method="POST">
					<div class="form-row">
						<div class="form-group col-sm-5" style="border-right: 2px #000 solid;">
							<label>E-Mail: </label>
							<input type="text" name="user" class="form-control">
							<br>
							<label>Senha: </label>
							<input type="password" name="senha" class="form-control">
							<br>
							<?php 
								// Verificação do email e senha se foram digitados corretamente 
								include "include/conexao.php";
								if (isset($_POST["entrar"])) {
									$sql = "SELECT EMAIL, SENHA FROM usuarios 
										WHERE EMAIL = '". $_POST["user"] ."' AND SENHA ='". $_POST["senha"] . "'; ";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {
											$_SESSION["user"] = $row["EMAIL"];												
											header('location:home.php');
										}
									}
									else {
										echo "<h6 style='color: red;'>Email ou senha digitado  incorretamente.</h6><br>";
									}
								}
								$conn->close(); 
							?>
							<center><button class="btn btn-success" name="entrar"> Entrar </button></center>
							<br>
						</div>
					</div>	
				</form>
				<div class="logo col-sm-6">
					<img src="imagens/E-RecycleLogo.png" width="100%">
				</div>
			</div>
		</div>
	</div>
	<footer id="rodape" style="position: fixed;">
		&copy; 2019 Copyright - Todos os direitos reservados. Site by <i>E-Recycle</i>.
	</footer>
</body>
</html>