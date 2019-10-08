<?php 
	include "include/conexao.php";

	$sql = "SELECT * FROM ARTIGOS INNER JOIN ADMINISTRADORES WHERE ARTIGOS.CODARTIGOS = $_POST[lerArtigo] ORDER BY CODARTIGOS DESC LIMIT 1";
	$result = $conn->query($sql);
			
	if ($result->num_rows > 0) {		
		while ($row = $result->fetch_assoc()) {
			echo "<div class='container'>
					<div class='row'>
						<div class='col-sm-16'>
							<div class='TituloArtigo'>
									<b><h1>$row[TITULO]</h1></b>
									<b><h2 class='SubTituloArtigo'>$row[DESCRICAO]</h2></b>
								<div class='col-sm-16'>

									<img src='imagens/space.jpg' class='img-responsive'>
									
								</div>
							<div class='col-sm-16 TextForm'>			 	
									<p> $row[CONTEUDO] </p>

									<h5><i><b>AUTOR:</b> $row[NOME] </i></h5>
									<h5><i><b>DATA DE PUBLICAÇÃO:</b> $row[DATA] </i></h5>
								</div>
							</div>	
						</div>
					</div>
				</div>";
		}
	}

	$conn->close();