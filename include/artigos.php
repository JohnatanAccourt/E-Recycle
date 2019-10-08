<?php 
	
	// Visualização da thumbnail do "artigo da semana".
	// English version: View on the thumbnail for "artigo da semana".
	
	echo "<button  class='button'><img class='aparecer' src='visualizarImagem.php?CODARTIGOS=$row[CODARTIGOS]'></button>
			<figcaption class='um'><b>$row[TITULO]</b></figcaption>
			<figcaption class='dois'>
				$row[DESCRICAO]							
			</figcaption>";