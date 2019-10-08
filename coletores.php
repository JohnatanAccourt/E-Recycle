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
	<link rel="stylesheet" type="text/css" href="css/style_coletores.css">
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
		
	<div class=".banner"></div>
	<img src="imagens/bannert.jpg" width="100%">
		
	<div id="fadeTitulo" class="title">
		Coletores
	</div>
<div id="border" class="border_tittle">PROCURAR POR COLETORES:</div>
	
	

	<div class="container">
		<center>
	 		<?php 
	 			include "include/conexao.php";
				$sql = "SELECT * FROM COLETORES INNER JOIN IMAGENS WHERE COLETORES.CODCOLETORES = IMAGENS.CODCOLETOR";
	 			$result = $conn->query($sql);
	 			if ($result->num_rows > 0) {		
					while ($row = $result->fetch_assoc()) {
						include "include/rating.php";
						include "include/verificaImagemTrue.php";
					}
				} else {
					echo "<br><h2 style='color: white;'>DESCULPE MAS POR ENQUANTO NÃO TEMOS COLETORES CADASTRADO EM NOSSO BANCO DE DADOS</h2>";
				}	 			
	 		?>
	 	</center>
	</div>
</div>
<br><br>
<footer id="rodape" style="position: fixed;">
	&copy; 2019 Copyright - Todos os direitos reservados. Site by <i>E-Recycle</i>.
</footer>
</body>
</html>