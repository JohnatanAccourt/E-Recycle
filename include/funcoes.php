<?php 
	// Update nas imagens dos coletores e clientes
	function updateImgColetor($codColetor){
		if(count($_FILES) > 0) {
			if(is_uploaded_file($_FILES['image']['tmp_name'])) {
			    $imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$imageProperties = getimageSize($_FILES['image']['tmp_name']);
				
				$sql = "UPDATE IMAGENS SET TIPO_IMAGEM = '{$imageProperties['mime']}', IMAGEM = '{$imgData}'
				WHERE CODCOLETOR = $codColetor";
				$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problema ao atualizar a imagem<br/>" . mysqli_error($conn));
			}
		}
	}

	function updateImgCliente($codCliente){
		if(count($_FILES) > 0) {
			if(is_uploaded_file($_FILES['image']['tmp_name'])) {
			    $imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$imageProperties = getimageSize($_FILES['image']['tmp_name']);
				
				$sql = "UPDATE IMAGENS SET TIPO_IMAGEM = '{$imageProperties['mime']}', IMAGEM = '{$imgData}'
				WHERE CODCOLETOR = $codCliente";
				$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problema ao atualizar a imagem<br/>" . mysqli_error($conn));
			}
		}
	}

	//  Insert na tabela Imagens
	function insertImgColetor($codColetor) {
		if(count($_FILES) > 0) {
			if(is_uploaded_file($_FILES['image']['tmp_name'])) {
			    $imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$imageProperties = getimageSize($_FILES['image']['tmp_name']);
				
				$sql = "INSERT INTO IMAGENS (TIPO_IMAGEM, IMAGEM, CODCOLETOR)
				VALUES('{$imageProperties['mime']}', '{$imgData}', $codColetor)";
				$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problema ao inserir a imagem<br/>" . mysqli_error($conn));
				if(isset($current_id)) {
					selectImgColetor($codColetor);
				}
			}
		}
	}

	function insertImgCliente($codCliente) {
		if(count($_FILES) > 0) {
			if(is_uploaded_file($_FILES['image']['tmp_name'])) {
			    $imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$imageProperties = getimageSize($_FILES['image']['tmp_name']);
				
				$sql = "INSERT INTO IMAGENS (TIPO_IMAGEM, IMAGEM, CODCOLETOR)
				VALUES('{$imageProperties['mime']}', '{$imgData}', $codCliente)";
				$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problema ao inserir a imagem<br/>" . mysqli_error($conn));
				if(isset($current_id)) {
					selectImgColetor($codCliente);
				}
			}
		}
	}

	// Select nas imagens dos coletores e clientes.
	function selectImgColetor($codColetor){
		$sql = "SELECT CODIGO FROM IMAGENS WHERE CODCOLETOR = $codColetor";
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result)) {
			echo "<br>
				<center>
				<div class='FotoCircle'>
					<center><img id='show' width='100%' src='visualizarImagem.php?CODIGO=$row[CODIGO]'></center>
				</div>
				<br>";
		}
	}

	function selectImgCliente($codCliente) {
		$sql = "SELECT CODIGO FROM IMAGENS WHERE CODCLIENTE = $codCliente";
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result)) {
			echo "<br>
				<center>
				<div class='FotoCircle'>
					<center><img id='show' width='100%' src='visualizarImagem.php?CODIGO=$row[CODIGO]' ></center>
				</div>
				<br>";
		}
	}