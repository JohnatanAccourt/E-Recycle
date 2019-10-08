<?php 
	include "include/conexao.php";
    if(isset($_GET['CODIGO'])) {
        $sql = "SELECT TIPO_IMAGEM,IMAGEM FROM IMAGENS WHERE CODIGO =" . $_GET['CODIGO'];
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problema ao visualizar a imagem<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["TIPO_IMAGEM"]);
        echo $row["IMAGEM"];
	}
	$conn->close();
?>