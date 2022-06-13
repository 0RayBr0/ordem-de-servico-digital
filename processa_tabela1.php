<?php include_once "conexao.php";

	$numero_chamado = filter_input(INPUT_POST, 'numero_chamado',FILTER_SANITIZE_STRING);
	$cliente = filter_input(INPUT_POST, 'cliente' , FILTER_SANITIZE_STRING);
	$mantenedores = filter_input(INPUT_POST, 'mantenedores' , FILTER_SANITIZE_STRING);
	$solicitantes= filter_input(INPUT_POST, 'solicitantes' , FILTER_SANITIZE_STRING);
	$res_area = filter_input(INPUT_POST, 'res_area' , FILTER_SANITIZE_STRING);
	$res_contrato = filter_input(INPUT_POST, 'res_contrato' , FILTER_SANITIZE_STRING);
	$data_emissao = filter_input(INPUT_POST, 'data_emissao' , FILTER_SANITIZE_STRING);
	$local = filter_input(INPUT_POST, 'local' , FILTER_SANITIZE_STRING);
	$centro_custo= filter_input(INPUT_POST, 'centro_custo' , FILTER_SANITIZE_STRING);

	$dados = filter_input(INPUT_POST, 'checkbox_DADOS' , FILTER_SANITIZE_STRING);
	$telefonia = filter_input(INPUT_POST, 'checkbox_TEL' , FILTER_SANITIZE_STRING);
	$circ_fechado_de_tv = filter_input(INPUT_POST, 'checkbox_CFTV' , FILTER_SANITIZE_STRING);
	$alerta_de_intrusao_CFTV = filter_input(INPUT_POST, 'checkbox_SAI' , FILTER_SANITIZE_STRING);
	$wan= filter_input(INPUT_POST, 'checkbox_WAN' , FILTER_SANITIZE_STRING);
	$pabx = filter_input(INPUT_POST, 'checkbox_PABX' , FILTER_SANITIZE_STRING);
	$controle_acesso_SCA = filter_input(INPUT_POST, 'checkbox_SCA' , FILTER_SANITIZE_STRING);
	$audio_de_video = filter_input(INPUT_POST, 'checkbox_SON' , FILTER_SANITIZE_STRING);
	$lan = filter_input(INPUT_POST, 'checkbox_LAN' , FILTER_SANITIZE_STRING);
	$equipamento = filter_input(INPUT_POST, 'checkbox_EQUIP' , FILTER_SANITIZE_STRING);
	$deteccao_de_incendio_SDI = filter_input(INPUT_POST, 'checkbox_SDAI' , FILTER_SANITIZE_STRING);
	$outros= filter_input(INPUT_POST, 'checkbox_OUTROS' , FILTER_SANITIZE_STRING);

	$controle_de_serviço = filter_input(INPUT_POST, 'radio_CTRLSERVICE' , FILTER_SANITIZE_STRING);
	$numero = filter_input(INPUT_POST, 'numero' , FILTER_SANITIZE_NUMBER_INT);
	$descricao_do_chamado= filter_input(INPUT_POST, 'descricao' , FILTER_SANITIZE_STRING);
	$tag_equip = filter_input(INPUT_POST, 'input_TAGEQUIP' , FILTER_SANITIZE_STRING);
	$item = filter_input(INPUT_POST, 'input_ITEM' , FILTER_SANITIZE_STRING);

	$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);// conectar ao bd 

	mysqli_select_db($conn,'$dbname'); //conectar ao bd


if($numero == '') $numero_aux = 'Default'; else $numero_aux = "'".$numero."'";

//if($data_emissao == '')	$data_emissao_aux = 'Default'; else $data_emissao_aux = "'".$data_emissao."'";

if($data_emissao == ''){
	$data_emissao = date("Y-m-d");
	$data_emissao_aux = "'".$data_emissao."'";
}
else $data_emissao_aux = "'".$data_emissao."'";

//echo "<script>alert('Dados salvos!'); window.location = 'cadastro.php'; </script>";
	$sql_cabecalho =  "INSERT INTO table1_osc VALUES ( 
	Default,
	'$numero_chamado', 
	'$cliente', 
	'$mantenedores', 
	'$solicitantes', 
	'$res_area', 
	'$res_contrato', 
	$data_emissao_aux, 
	'$local', 
	'$centro_custo', 
	'$dados','$telefonia', 
	'$circ_fechado_de_tv', 
	'$alerta_de_intrusao_CFTV', 
	'$wan', 
	'$pabx', 
	'$controle_acesso_SCA', 
	'$audio_de_video', 
	'$lan', 
	'$equipamento', 
	'$deteccao_de_incendio_SDI', 
	'$outros', 
	'$controle_de_serviço', 
	$numero_aux, 
	'$descricao_do_chamado',
	'$tag_equip',
	'$item'
	);";

/*

if(mysqli_query($conn, $sql_cabecalho)){
		echo "<script>alert('Dados salvos!'); window.location = 'cadastro.php'; </script>"; 
}
else{	    echo "Erro ao salvar dados: ".$sql_cabecalho."<br>".mysqli_error($conn); 
	}
*/

 if(mysqli_query($conn, $sql_cabecalho)){

		echo "<script>alert('Dados salvos!'); window.location = 'Home.php'; </script>";

	}

	 else{
	    echo "Erro ao salvar dados: ".$sql_cabecalho."<br>".mysqli_error($conn); 
	}


	mysqli_close($conn);




?>