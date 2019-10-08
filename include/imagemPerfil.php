<?php 
	if ($codColetores == null) {

		$sql = "SELECT * FROM IMAGENS WHERE CODCLIENTE =  $codClientes ORDER BY CODCLIENTE LIMIT 1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {		
			while ($row = $result->fetch_assoc()) {
				$fotoPerfil = "<br><center>
								<div class='FotoCircle'>
									<center><img id='show' width='100%' src='visualizarImagem.php?CODIGO=$row[CODIGO]' ></center>
								</div>
								<br>		
							</center><br>";
			}
		} else {
			$fotoPerfil = "<br><center>
					<div class='FotoCircle '>
						<center><img id='show' width='100%' src='imagens/user_default.png' ></center>
					</div><br>";
		}
		
	} else {
		$sql = "SELECT * FROM IMAGENS WHERE CODCOLETOR=  $codColetores ORDER BY CODCOLETOR LIMIT 1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {		
			while ($row = $result->fetch_assoc()) {
				$fotoPerfil = "<br><center>
								<div class='FotoCircle'>
									<center><img id='show' width='100%' src='visualizarImagem.php?CODIGO=$row[CODIGO]' ></center>
								</div>
								<br>
							</center><br>";
			}
		} else {
			$fotoPerfil = "<br><center>
						<div class='FotoCircle '>
							<center><img id='show' width='100%' src='imagens/user_default.png' ></center>
						</div>
						</center><br>";
		}
	}