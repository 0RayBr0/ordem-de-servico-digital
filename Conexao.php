<?php

	$servidor = "localhost"; 
	$dbname = "osc_db";  
	$dbusuario = "root"; 
	$dbsenha = ""; 
	
	$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

	if (!$conn){
		die ("Conexão falhou:".mysqli_connect_error());
		echo "Erro ao salvar dados:"."<br>".mysqli_error($conn);

		mysql_set_charset($conn, "utf8");
	}
?>