<?php 
	echo "<button  class='button'><img class='aparecer' src='visualizarImagem.php?CODARTIGOS=$row[CODARTIGOS]'></button>
			<figcaption class='um'><b>$row[TITULO]</b></figcaption>
			<figcaption class='dois'>
				$row[DESCRICAO]							
			</figcaption>";