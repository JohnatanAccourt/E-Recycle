<?php 
	if (isset($_POST["btnAtivar"])) {
		$sql = "SELECT * FROM COLETORES EMAIL = '".$_SESSION["user"]."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = mysqli_fetch_array($result)) {
				if ($row["CODREGIOES"] == 1) {
					$regiao = "<div class='form-group col-md-4'>										
								<label style='color: white;'>ÁREA DE ATUAÇÃO: </label>
								<br>
								<select name='cboZona' required>
									<option value='1' >
										ZONA SUL - Santo Amaro
									</option>
									<option value='2'>
										ZONA SUL - Socorro
									</option>
								</select>
							</div>";
				} else {
					$regiao = "<div class='form-group col-md-4'>										
								<label style='color: white;'>ÁREA DE ATUAÇÃO: </label>
								<br>
								<select name='cboZona' required>
									<option value='2' >
										ZONA SUL - Socorro
									</option>
									<option value='1'>
										ZONA SUL - Santo Amaro
									</option>
								</select>
							</div>";
				}
				$campos = "<button name='btnAtivar' class='btn btn-default' disabled='' ><b>Clique aqui para habilitar os campos </b><span class='glyphicon glyphicon-refresh'></span></button><br><br>
				<div  class='form-group col-sm-4'>
					<label style='color: white'>NOME:</label><br>
					<input type='text' name='txtNome' value='$row[NOME]'>
				</div>
				
				$regiao

				<div  class='form-group col-sm-4'>
					<label style='color: white'>CPF</label><br>
					<input type='text' name='txtCpf' value='$row[CPF]'>

				</div>
				<center>
					<div  class='form-group col-sm-4'>
						<label style='color: white'>TELEFONE: </label><br>
						<input type='text' name='txtTelefone' value='$row[TELEFONE]' >
					</div>
					<div  class='form-group col-md-4' >
						<label style='color: white;'>EMAIL</label><br>
						<input type='text' name='txtEmail' value='$row[EMAIL]'>
					</div>

					<div  class='form-group col-md-4'>
						<label style='color: white;'>COMFIRMAR EMAIL</label><br>
						<input type='text' name='txtCemail'>
					</div>
				</center>";

				echo "$campos";
			}
		} else {
			$sql = "SELECT * FROM CLIENTES EMAIL = '".$_SESSION["user"]."'";
			$result = $conn->query($sql);
		
			if ($result->num_rows > 0) {
				while ($row = mysqli_fetch_array($result)) {

					$campos = "<button name='btnAtivar' class='btn btn-default' disabled='' ><b>Clique aqui para habilitar os campos </b><span class='glyphicon glyphicon-refresh'></span></button><br><br>
					<div  class='form-group col-sm-4'>
						<label style='color: white'>NOME:</label><br>
						<input type='text' name='txtNome' value='$row[NOME]' >
					</div>

					<div  class='form-group col-sm-4'>
						<label style='color: white'>CPF</label><br>
						<input type='text' name='txtCpf' value='$row[CPF]' >

					</div>
					<center>
						<div  class='form-group col-sm-4'>
							<label style='color: white'>TELEFONE: </label><br>
							<input type='text' name='txtTelefone' value='$row[TELEFONE]' >
						</div>
						<div  class='form-group col-md-4' >
							<label style='color: white;'>EMAIL</label><br>
							<input type='text' name='txtEmail' value='$row[EMAIL]'>
						</div>

						<div  class='form-group col-md-4'>
							<label style='color: white;'>COMFIRMAR EMAIL</label><br>
							<input type='text' name='txtCemail'>
						</div>
					</center>";

					echo "$campos";
				}		
			}
		}
	} 

	if (isset($_POST["btnAtt"])) {
		if ($_POST["txtEmail"] == $_POST["txtEmail"]) {
			$sql = "UPDATE COLETORES SET NOME='$_POST[txtNome]', EMAIL='$_POST[txtEmail]', TELEFONE ='$_POST[txtTelefone]', CPF ='$_POST[txtXpf]', CODREGIOES = $_POST[cboZona]
			WHERE CODCOLETORES= ".$_SESSION["codColetor"];

			if ($conn->query($sql) === TRUE) {
			    echo "Atualização de suas informações efetuada com sucesso!!";
			} else {
			    echo "Erro ao atualizar suas informações: " . $conn->error;
			}

			$sql = "UPDATE CLIENTES SET NOME='$_POST[txtNome]', EMAIL='$_POST[txtEmail]', TELEFONE ='$_POST[txtTelefone]', CPF ='$_POST[txtXpf]'
			WHERE CODCOLETORES= ".$_SESSION["codCliente"];

			if ($conn->query($sql) === TRUE) {
			    echo "Atualização de suas informações efetuada com sucesso!!";
			} else {
			    echo "Erro ao atualizar suas informações: " . $conn->error;
			}
		}
	}

	$sql = "SELECT * FROM COLETORES WHERE EMAIL = '".$_SESSION["user"]."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_array($result)) {
			if ($row["CODREGIOES"] == 1) {
				$regiao = "<div class='form-group col-md-4'>										
							<label style='color: white;'>ÁREA DE ATUAÇÃO: </label>
							<br>
							<select name='cboZona' required>
								<option value='1' >
									ZONA SUL - Santo Amaro
								</option>
								<option value='2'>
									ZONA SUL - Socorro
								</option>
							</select>
						</div>";
			} else {
				$regiao = "<div class='form-group col-md-4'>										
							<label style='color: white;'>ÁREA DE ATUAÇÃO: </label>
							<br>
							<select name='cboZona' required>
								<option value='2' >
									ZONA SUL - Socorro
								</option>
								<option value='1'>
									ZONA SUL - Santo Amaro
								</option>
							</select>
						</div>";
			}
			$campos = "<button name='btnAtivar' class='btn btn-default' disabled='' ><b>Clique aqui para habilitar os campos </b><span class='glyphicon glyphicon-refresh'></span></button><br><br>
			<div  class='form-group col-sm-4'>
				<label style='color: white'>NOME:</label><br>
				<input type='text' name='txtNome' value='$row[NOME]' readonly=''>
			</div>
			
				$regiao

			<div  class='form-group col-sm-4'>
				<label style='color: white'>CPF</label><br>
				<input type='text' name='txtCpf' value='$row[CPF]' readonly=''>

			</div>
			<center>
				<div  class='form-group col-sm-4'>
					<label style='color: white'>TELEFONE: </label><br>
					<input type='text' name='txtTelefone' value='$row[TELEFONE]' readonly=''>
				</div>
				<div  class='form-group col-md-4' >
					<label style='color: white;'>EMAIL</label><br>
					<input type='text' name='txtEmail' value='$row[EMAIL]' readonly=''>
				</div>
			</center>";

			echo "$campos";
		}
	} else {
		$sql = "SELECT * FROM CLIENTES WHERE EMAIL = '".$_SESSION["user"]."'";
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {
			while ($row = mysqli_fetch_array($result)) {
				$campos = "<button name='btnAtivar' class='btn btn-default' disabled='' ><b>Clique aqui para habilitar os campos </b><span class='glyphicon glyphicon-refresh'></span></button><br><br>
				<div  class='form-group col-sm-4'>
					<label style='color: white'>NOME:</label><br>
					<input type='text' name='txtNome' value='$row[NOME]' readonly=''>
				</div>

				<div  class='form-group col-sm-4'>
					<label style='color: white'>CPF</label><br>
					<input type='text' name='txtCpf' value='$row[CPF]' readonly=''>

				</div>
				<center>
					<div  class='form-group col-sm-4'>
						<label style='color: white'>TELEFONE: </label><br>
						<input type='text' name='txtTelefone' value='$row[TELEFONE]' readonly=''>
					</div>
					<div  class='form-group col-md-4' >
						<label style='color: white;'>EMAIL</label><br>
						<input type='text' name='txtEmail' value='$row[EMAIL]' readonly=''>
					</div>
				</center>";

				echo "$campos";
			}		
		}
	}
				