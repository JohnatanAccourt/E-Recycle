<?php 
	if ($row["CODREGIOES"] == 1) {
		echo 
		"<center>
			<div class='col-sm-4'>
				<div class='flip-container' ontouchstart='this.classList.toggle('hover');'>
			 		<div class='flipper'>
			 			<div class='front'>
			 				<center>
			 					<img class='imgPer' src='visualizarImagem.php?CODIGO=$row[CODIGO]'>
			 				</center>
			 			</div>
						<div class='back'>
			 				<center>
			 					<h1 class='nome'><b>$row[NOME]</b></h1>
			 					<hr>
			 					<a href='https://api.whatsapp.com/send?phone=55$row[TELEFONE]' target='BLANK'><p class='numero' style='color: green;'>$row[TELEFONE]</p></a>
			 					<h4><b><i> AVALIAÇÃO: </i></b></h4>
			 						$rating
			 					<h4><b>REGIÃO DE ATENDIMENTO: </b> Zona Sul - Santo Amaro</h4> 
			 					<p class='email'><span class='glyphicon glyphicon-envelope'></span>&nbsp;$row[EMAIL]</p>
			 				</center>
			 			</div>
			 		</div>		
			 	</div>
			 </div>
		</center>";
	} elseif ($row["CODREGIOES"] == 2) {
		echo 
		"<center>
			<div class='col-sm-4'>
				<div class='flip-container' ontouchstart='this.classList.toggle('hover');'>
			 		<div class='flipper'>
			 			<div class='front'>
			 				<center>
			 					<img class='imgPer' src='visualizarImagem.php?CODIGO=$row[CODIGO]'>
			 				</center>
			 			</div>
						<div class='back'>
			 				<center>
			 					<h1 class='nome'><b>$row[NOME]</b></h1>
			 					<hr>
			 					<a href='https://api.whatsapp.com/send?phone=55$row[TELEFONE]' target='BLANK'><p class='numero' style='color: green;'>$row[TELEFONE]</p></a>
			 					<h4><b><i> AVALIAÇÃO: </i></b></h4>
			 						$rating
			 					<h4><b>REGIÃO DE ATENDIMENTO: </b> Zona Sul - Socorro</h4> 
			 					<p class='email'><span class='glyphicon glyphicon-envelope'></span>&nbsp;$row[EMAIL]</p>
			 				</center>
			 			</div>
			 		</div>		
			 	</div>
			 </div>
		</center>";
	}
	

							