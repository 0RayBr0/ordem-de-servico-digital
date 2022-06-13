<?php

include_once("conexao.php");
//ini_set('default_charset','UTF-8');

function retorna($quero_buscar, $conexaoSQL)
{	
	//criar a comando query para buscar número do chamado, cliente e solicitante
	$comando_queryA = "SELECT numero_chamado, cliente, data_de_emissao FROM table1_osc WHERE numero_chamado = $quero_buscar LIMIT 1;";
	$comando_queryB = "SELECT numero_chamado, cliente FROM table2_osc WHERE numero_chamado = $quero_buscar LIMIT 1;";
	$comando_queryC = "SELECT numero_chamado FROM table3_osc WHERE numero_chamado = $quero_buscar LIMIT 1;";
	
	//executar a query
	$resultado_queryA = mysqli_query($conexaoSQL, $comando_queryA);
	$resultado_queryB = mysqli_query($conexaoSQL, $comando_queryB);
	$resultado_queryC = mysqli_query($conexaoSQL, $comando_queryC);

	//IF para identificar situação de não encontrar a informação
	if($resultado_queryA->num_rows)
	{
		//Retorna um objeto com as colunas com o resultado da busca
		$row_informacoes = $resultado_queryA->fetch_assoc();
		$valor['cliente'] = $row_informacoes['cliente'];
		$valor['data_emissao'] = $row_informacoes['data_de_emissao'];
		$valor['preatendimento'] = 'OK';
	}
	else 
	{
		$valor['preatendimento'] = 'NOT OK';
		$valor['cliente'] = 'NÃO ENCONTRADO';
	}

	if($resultado_queryB->num_rows) $valor['atendido'] = 'OK';
	else $valor['atendido'] = 'NOT OK';

	if($resultado_queryC->num_rows)	$valor['autenticado_cliente'] = 'OK';
	else $valor['autenticado_cliente'] = 'NOT OK';

	return json_encode($valor);
}

if(isset($_GET['numero_chamado']))	echo retorna($_GET['numero_chamado'], $conn);

?>

