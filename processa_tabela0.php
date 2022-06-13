<?php include_once "conexao.php";

	$numero_chamado = filter_input(INPUT_POST, 'numero_chamado',FILTER_SANITIZE_STRING);
	$avaliacao_do_servico_executado= filter_input(INPUT_POST, 'avaliacao_servico_executado' , FILTER_SANITIZE_STRING);
	$data_visto_saida =  filter_input(INPUT_POST, 'data_visto_saida' , FILTER_SANITIZE_STRING);
	$hora_visto_saida =  filter_input(INPUT_POST, 'hora_visto_saida' , FILTER_SANITIZE_STRING);

	$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);// conectar ao bd 

	mysqli_select_db($conn,'$dbname'); //conectar ao bd

if($data_visto_saida == '')	$data_visto_saida_aux = 'Default'; else $data_visto_saida_aux = "'".$data_visto_saida."'";

if($hora_visto_saida == '')	$hora_visto_saida_aux = "'".$hora_visto_saida."'"; else $hora_visto_saida_aux = "'".$hora_visto_saida."'";


//echo "<script>alert('Dados salvos!'); window.location = 'cadastro.php'; </script>";
	$sql_cabecalho =  "INSERT INTO table0_osc VALUES ( 
	Default,
	'$numero_chamado',
	'$avaliacao_do_servico_executado', 
	$data_visto_saida_aux, 
	$hora_visto_saida_aux
	);";

	    
 if(mysqli_query($conn, $sql_cabecalho)){

		echo "<script>alert('Dados salvos!'); window.location = 'cadastro.php'; </script>";

	}

	 else{
	    echo "Erro ao salvar dados: ".$sql_cabecalho."<br>".mysqli_error($conn); 
	}


	mysqli_close($conn);


?>