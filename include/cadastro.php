<?php 
	
							// Verificando o tipo de usuário antes de fazer o cadastro.
							// English version: Verifying the type of user before registering.

							if (isset($_POST["btnContinuar"])) {
								$_SESSION["cliente"] = false;
								$_SESSION["coletor"] = false;
								if ($_POST["check"] == "cliente") {
									$_SESSION["cliente"] = true;
									include "include/cadastroCli.php";
								}elseif ($_POST["check"] == "coletor"){
									$_SESSION["coletor"] = true;
									include "include/cadastroCol.php";
								}
							}								
																		 
							// Cadatrando usuário no banco.
							// English version: Created user in the bank.

							if (isset($_POST["btnCadastrar"])) {
								if (($_POST["txtEmail"] == $_POST["txtCemail"]) AND ($_POST["txtSenha"] === $_POST["txtCsenha"])) {
									include "include/conexao.php";
									if ($_SESSION["coletor"] == true) {
										
										//Inserindo os dados do coletor na tabela COLETORES.
										$sql = "INSERT INTO COLETORES (NOME, EMAIL, TELEFONE, CPF, CODREGIOES)
										VALUES ('$_POST[txtUser]', '$_POST[txtEmail]', '$_POST[txtTel]','$_POST[txtCpf]',$_POST[cboZona])";

										if ($conn->query($sql)) {
											$last_id = $conn->insert_id;
										}

										// Selecionando a tabela coletores para pegar o código do coletor.
										$sql = "SELECT * FROM COLETORES WHERE EMAIL = '$_POST[txtEmail]'";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()) {
												$id = $row["CODCOLETORES"];
											}
										}

										// Inserindo dados na tabela usuários.
										// Utilizando o $cod para fazer o relacionamento entre a tabela USUARIOS e COLETORES.
										$sql = "INSERT INTO USUARIOS (EMAIL, SENHA, CODTIPO, CODCOLETORES)
										VALUES ('$_POST[txtEmail]', '$_POST[txtSenha]', 3, $id)";

										if ($conn->query($sql)) {
											// Cadastro concluído.
											$last_id = $conn->insert_id;
											header("location:login.php");
										} else {
											// Notificação de erro.
											echo "<b>Error: </b> erro ao cadastrar, Tente novamente";
										}
									}
									if ($_SESSION["cliente"] == true) {
										
										//Inserindo os dados do cliente na tabela CLIENTES.
										$sql = "INSERT INTO CLIENTES (NOME,EMAIL,TELEFONE,CPF)
										VALUES ('$_POST[txtUser]', '$_POST[txtEmail]', '$_POST[txtTel]', '$_POST[txtCpf]')";

										if ($conn->query($sql)) {
											$last_id = $conn->insert_id;
										}

										// Selecionando a tabela clientes para pegar o código do cliente.
										$sql = "SELECT * FROM CLIENTES WHERE EMAIL = '$_POST[txtEmail]'";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()) {
												$id = $row["CODCLIENTES"];
											}
										}

										// Inserindo dados na tabela usuários.
										// Utilizando o $cod para fazer o relacionamento entre a tabela USUARIOS e CLIENTES.
										$sql = "INSERT INTO USUARIOS (EMAIL, SENHA, CODTIPO, CODCLIENTES)
										VALUES ('$_POST[txtEmail]', '$_POST[txtSenha]',2, $id)";

										if ($conn->query($sql)) {
											// Cadastro concluído.
											$last_id = $conn->insert_id;
											header("location:login.php");
										} else {
											// Notificação de erro.
											echo "<b>Error: </b><h6>erro ao cadastrar, Tente novamente</h6>";
										}

									}
								
								}else {
									echo "<b>Error: </b><h6 style='color: red;'> E-mail ou senhas não correspondentes!</h6>";
									if ($_POST["check"] == "cliente") {
										include "include/cadastroCli.php";
									}elseif ($_POST["check"] == "coletor"){
										include "include/cadastroCol.php";
									}
								}
							}