<!DOCTYPE html>
<html>
<head>
	<title>E-Recycle - Artigos</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Allan|Just+Another+Hand|Patrick+Hand+SC&display=swap" rel="stylesheet"> 
	<link rel="icon" type="image/png" href="imagens/E-RecycleLogo1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style_Artigos.css">
	<script src="js/script.js"></script>
	<style type="text/css">
		.button {     
		    background-color: Transparent;
		    background-repeat:no-repeat;
		    border: none;
		    cursor:pointer;
		    overflow: hidden;        
		}
	</style>
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
		Artigos
	</div>	
	<div id="border" class="border_tittle">Artigo Da Semana:</div>
		<br>
		<div class="Artg_Princ">
			<div class="container-fluid">
				<figure id="txtINimg">
				<!-- Tamanho da imagem - Artigo Da Semana/Principal (1000x530)  -->
				<?php 
					include "include/conexao.php";
					
					$sql = "SELECT * FROM ARTIGOS ORDER BY CODARTIGOS DESC LIMIT 1";
					$result = $conn->query($sql);
			 			
					if ($result->num_rows > 0) {		
						while ($row = $result->fetch_assoc()) {
							echo "<form action='artigos2.php' method='POST'><input type='hidden' name='lerArtigo' value='$row[CODARTIGOS]'>
								<button  class='button'><img class='aparecer' src='artigos_thumb/polui.jpg'></button>
								<figcaption class='um'><b>$row[TITULO]</b></figcaption>
								<figcaption class='dois'>
									$row[DESCRICAO]							
								</figcaption></form>";
						}
					}

					$conn->close();
				?>
					
			</div>		
		</div>
	</div>
			<br>			
			<div id="border2" class="border_tittle">Outros Artigos</div>

			<div class="videopi col-sm-12" style="text-align: center;"><br>
				

				<!-- Tamanho da imagem - Outros Artigos (857x441)  -->


				
			<a href="artigos2.php">
			<div class="thumb">
				<p>
					<div class="animaOutrosArtigos">
						<img src="artigos_thumb/thumb11.jpg" width="500">
					</div>
				</p>

				<p><div class="thumb2">
					<p class="tit_p"><b>Tudo que você precisa saber sobre reciclagem.</b></p>
				</div>
			</div>
			</a>

			<a href="artigos2.php">
			<div class="thumb">
				<p>
					<div class="animaOutrosArtigos">
						<img src="artigos_thumb/thumn22.png" width="500">
					</div>
				</p>

				<p><div class="thumb2">
					<p class="tit_p"><b>Entenda o processo de reciclagem.</b></p>
				</div></p>
			</div>
			</a>


			<br><br><br>
			

			<a href="artigos2.php">
			<div class="thumb">
				<p>
					<div class="animaOutrosArtigos">
						<img src="artigos_thumb/thumb33.jpg" width="500">
					</div>
				</p>				
				<p><div class="thumb2">
					<p class="tit_p"><b>13 itens consumimos diariamente que DEVEMOS reaproveitar.</b></p>
				</div></p>				
			</div>
			</a>

			<a href="artigos2.php">
			<div class="thumb">
				<p>
					<div class="animaOutrosArtigos">
						<img src="artigos_thumb/imgvideo.JPG" width="500">
					</div>
				</p>
				<p><div class="thumb2">
					<p class="tit_p"><b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</b></p>
				</div></p>
			</div>
			</a>
		</div>
	</div>
	<br><br>
	<br><br>
	<footer style="position: fixed;" id="rodape">
		&copy; 2019 Copyright - Todos os direitos reservados. Site by <i>E-Recycle</i>.
	</footer>
</body>
</html>