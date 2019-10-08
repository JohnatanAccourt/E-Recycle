<?php 
	if (isset($_POST["atualizarFtCol"])) {
		if(count($_FILES) > 0) {
			if(is_uploaded_file($_FILES['image']['tmp_name'])) {
			    $imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$imageProperties = getimageSize($_FILES['image']['tmp_name']);
				
				$sql = "UPDATE IMAGENS SET TIPO_IMAGEM = '{$imageProperties['mime']}', IMAGEM = '{$imgData}'
				WHERE CODCOLETOR = ". $_SESSION["codColetor"];
				$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problema ao atualizar a imagem<br/>" . mysqli_error($conn));
			}
		}
	}

	if (isset($_POST["atualizarFtCli"])) {
		if(count($_FILES) > 0) {
			if(is_uploaded_file($_FILES['image']['tmp_name'])) {
			    $imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$imageProperties = getimageSize($_FILES['image']['tmp_name']);
				
				$sql = "UPDATE IMAGENS SET TIPO_IMAGEM = '{$imageProperties['mime']}', IMAGEM = '{$imgData}'
				WHERE CODCOLETOR = ". $_SESSION["codCliente"];
				$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problema ao atualizar a imagem<br/>" . mysqli_error($conn));
			}
		}
	}

	if (isset($_POST["insertFtCol"])) {		
		if(count($_FILES) > 0) {
			if(is_uploaded_file($_FILES['image']['tmp_name'])) {
			    $imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$imageProperties = getimageSize($_FILES['image']['tmp_name']);
				
				$sql = "INSERT INTO IMAGENS (CODCOLETOR,TIPO_IMAGEM, IMAGEM) 
				VALUES (".$_SESSION["codColetor"].",'{$imageProperties['mime']}', '{$imgData}')";
				$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problema ao atualizar a imagem<br/>" . mysqli_error($conn));
			} 
		}
	}

	if (isset($_POST["insertFtCli"])) {		
		if(count($_FILES) > 0) {
			if(is_uploaded_file($_FILES['image']['tmp_name'])) {
			    $imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$imageProperties = getimageSize($_FILES['image']['tmp_name']);
				
				$sql = "INSERT INTO IMAGENS (CODCLIENTE,TIPO_IMAGEM, IMAGEM) 
				VALUES (".$_SESSION["codCliente"].",'{$imageProperties['mime']}', '{$imgData}')";
				$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problema ao atualizar a imagem<br/>" . mysqli_error($conn));
			} 
		}
	}
	
	$sql = "SELECT * FROM COLETORES, IMAGENS 
	WHERE COLETORES.EMAIL = '". $_SESSION["user"]."' AND COLETORES.CODCOLETORES = IMAGENS.CODCOLETOR";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {		
		while ($row = mysqli_fetch_array($result)) {
			$ftBoll = true;
			$foto = "<form action='' enctype='multipart/form-data' method='POST'><br>
				<center>
				<h2 style='color: white;display: inline-block;'> <i>SEJA BEM VINDO(A)</h2>
				<h2 style='color: #E0F5FF;display: inline-block'> $row[NOME] </h2>
				<br><br>
				<div class='FotoCircle'>
					<center><img id='show' width='100%' src='visualizarImagem.php?CODIGO=$row[CODIGO]' ></center>
				</div>
				<br>
				<input type='file' name='image' class='btn btn-default' style='display: inline-block;'>
				<button name='atualizarFtCol' class='btn btn-primary'><span class='glyphicon glyphicon-picture'></span> Trocar foto de perfil </button>
				<br><br></form>";
			$_SESSION["codColetor"] = $row["CODCOLETORES"];
			echo "$foto";
		}
	} 
	if ($ftBoll == false) {
		
		$sql = "SELECT * FROM COLETORES WHERE EMAIL = '". $_SESSION["user"]."'";
		$result = $conn->query($sql);	

		while ($row = mysqli_fetch_array($result)) {
			$foto = "<form action='' enctype='multipart/form-data' method='POST'><br>
			<center>
			<h2 style='color: white;display: inline-block;'> <i>SEJA BEM VINDO(A)</h2>
			<h2 style='color: #E0F5FF;display: inline-block'> $row[NOME] </h2>
			<br><br>
			<div class='FotoCircle'>
				<center><img id='show' width='100%' src='imagens/user_default.png' ></center>
			</div>
			<br>
			<h5 style='color: white;'><i> Coloque uma foto de perfil para aparecer na página destinada para você coletor</h5>
			<br>
			<input type='file' name='image' class='btn btn-default' style='display: inline-block;'>
			<button name='insertFtCol' class='btn btn-primary'><span class='glyphicon glyphicon-picture'></span> Trocar foto de perfil </button>
			<br><br></form>";
			$_SESSION["codColetor"] = $row["CODCOLETORES"];
			echo "$foto";
		}
	}


	$sql = "SELECT * FROM CLIENTES, IMAGENS 
	WHERE CLIENTES.EMAIL = '". $_SESSION["user"]."' AND CLIENTES.CODCLIENTES = IMAGENS.CODCLIENTE";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {		
		while ($row = mysqli_fetch_array($result)) {
			$ftBoll = true;
			$foto = "<form action='' enctype='multipart/form-data' method='POST'><br>
				<center>
				<h2 style='color: white;display: inline-block;'> <i>SEJA BEM VINDO(A)</h2>
				<h2 style='color: #E0F5FF;display: inline-block'> $row[NOME] </h2>
				<br><br>
				<div class='FotoCircle'>
					<center><img id='show' width='100%' src='visualizarImagem.php?CODIGO=$row[CODIGO]' ></center>
				</div>
				<br>
				<input type='file' name='image' class='btn btn-default' style='display: inline-block;' class='btn btn-primary'>
				<button name='atualizarFtCli' class='btn btn-primary'><span class='glyphicon glyphicon-picture'></span>Trocar foto de perfil </button>
				<br><br></form>";
			$_SESSION["codCliente"] = $row["CODCLIENTES"];
			echo "$foto";
		}
	} 
	if ($ftBoll == false) {
		
		$sql = "SELECT * FROM CLIENTES WHERE EMAIL = '". $_SESSION["user"]."'";
		$result = $conn->query($sql);	

		while ($row = mysqli_fetch_array($result)) {
			$foto = "<form action='' enctype='multipart/form-data' method='POST'><br>
			<center>
			<h2 style='color: white;display: inline-block;'> <i>SEJA BEM VINDO(A)</h2>
			<h2 style='color: #E0F5FF;display: inline-block'> $row[NOME] </h2>
			<br><br>
			<div class='FotoCircle'>
				<center><img id='show' width='100%' src='imagens/user_default.png' ></center>
			</div>
			<br>
			<h5 style='color: white'> 
				Desculpe pela incoveniência, mas estamos enfrentando um problema para inserir sua foto de perfil
			</h5>
			<input type='file' name='image' class='btn btn-default' style='display: inline-block;'>
			<button name='insertFtCli' class='btn btn-primary'><span class='glyphicon glyphicon-picture' disabled=''></span>Trocar foto de perfil </button>
			<br><br></form>";
			$_SESSION["codCliente"] = $row["CODCLIENTES"];
			echo "$foto";
		
		}
	}