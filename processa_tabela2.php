<?php include_once "conexao.php";

	$numero_chamado = filter_input(INPUT_POST, 'numero_chamado',FILTER_SANITIZE_STRING);
	$cliente = filter_input(INPUT_POST, 'cliente' , FILTER_SANITIZE_STRING);
	$mantenedores = filter_input(INPUT_POST, 'mantenedores' , FILTER_SANITIZE_STRING);
	$mantenedores_atualizado = filter_input(INPUT_POST,'mantenedores_atualizado' , FILTER_SANITIZE_STRING);
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

	$data_abertura_osc = filter_input(INPUT_POST, 'data_de_abertura', FILTER_SANITIZE_STRING);
	$hora_abertura_osc = filter_input(INPUT_POST, 'hora_de_abertura' , FILTER_SANITIZE_STRING);
	$data_fechamento_osc = filter_input(INPUT_POST, 'data_de_fechamento' , FILTER_SANITIZE_STRING);
	$hora_fechamento_osc = filter_input(INPUT_POST, 'hora_de_fechamento' , FILTER_SANITIZE_STRING);
	
	$tag_equip = filter_input(INPUT_POST, 'input_TAGEQUIP' , FILTER_SANITIZE_STRING);
	$item = filter_input(INPUT_POST, 'input_ITEM' , FILTER_SANITIZE_STRING);
	
	$calculo_tempo_atendimento =  filter_input(INPUT_POST, 'calculo_do_tempo' , FILTER_SANITIZE_STRING);

	$causas_identificadas = filter_input(INPUT_POST, 'causas_identificadas' , FILTER_SANITIZE_STRING);
	$efeito = filter_input(INPUT_POST, 'efeito' , FILTER_SANITIZE_STRING);

	$acao_realizada = filter_input(INPUT_POST, 'acao_realizada' , FILTER_SANITIZE_STRING);
	$cartao_de_material = filter_input(INPUT_POST, 'cartao_de_material' , FILTER_SANITIZE_STRING);
	$qtd = filter_input(INPUT_POST, 'qtd' , FILTER_SANITIZE_STRING);

	$status_do_chamado = filter_input(INPUT_POST, 'radio_STATUS_CHAMADO' , FILTER_SANITIZE_STRING);

	$observacao= filter_input(INPUT_POST, 'observacao' , FILTER_SANITIZE_STRING);
	
	$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);// conectar ao bd 

	mysqli_select_db($conn,'$dbname'); //conectar ao bd


//Teste do valor de numero de projeto
if($numero == '') $numero_aux = 'Default'; else $numero_aux = "'".$numero."'";

//ATRIBUINDO VALORES NA MAO PARA TESTE - APAGAR DEPOIS DE TESTAR
//$data_fechamento_osc = '2020-02-02'; //date("y-m-d"); 
//$data_abertura_osc = '2020-02-02';  // inserir o now aqui?


//$hora_fechamento_osc = '12:00'; //date("H:i"); 
//$hora_abertura_osc = '13:00'; // inserir o now aqui?


//Teste dos valores de data

if($data_emissao == ''){
	$data_emissao = date("Y-m-d");
	$data_emissao_aux = "'".$data_emissao."'";
}
else $data_emissao_aux = "'".$data_emissao."'";

if($data_abertura_osc == ''){
	$data_abertura_osc = date("Y-m-d");
	$data_abertura_osc_aux = "'".$data_abertura_osc."'";
}
else $data_abertura_osc_aux = "'".$data_abertura_osc."'";

if($data_fechamento_osc == ''){
	$data_fechamento_osc = date("Y-m-d");
	$data_fechamento_osc_aux = "'".$data_fechamento_osc."'";
}
else $data_fechamento_osc_aux = "'".$data_fechamento_osc."'";
	//$data_fechamento_osc_aux = "'".date("Y-m-d")."'"; else $data_fechamento_osc_aux = "'".$data_fechamento_osc."'";

//Teste dos valores de hora
if($hora_abertura_osc == ''){
	$hora_abertura_osc = date("H:i"); 
	$hora_abertura_osc_aux = "'".$hora_abertura_osc."'"; 
}
else $hora_abertura_osc_aux = "'".$hora_abertura_osc."'";

if($hora_fechamento_osc == ''){
	$hora_fechamento_osc = date("H:i"); 
	$hora_fechamento_osc_aux = "'".$hora_fechamento_osc."'"; 
}
else $hora_fechamento_osc_aux = "'".$hora_fechamento_osc."'";


//Testando se calculo será possível e realizando o Calculo de tempo gasto nesta O.S.C. quando possível
if((('Default' != $data_abertura_osc) && ('' != $data_fechamento_osc)) && (('' != $hora_abertura_osc) && ('' != $hora_fechamento_osc)))
{

	//Calculando diferença das datas
	$data1 = explode("-", $data_abertura_osc); //Transfomando o horario de abetura em um array de 3 posições
	$data2 = explode("-", $data_fechamento_osc); //Transfomando o horario de fechamento em um array de 3 posições

	$acumuladorD1 = 0;
	$acumuladorD2 = 0;

	$diferencaAno = $data2[0] - $data1[0];
	$dias_bissexto = (int) ($diferencaAno / 4);

	if($data1[0]%4 == 0) $flagdata1B = true; else $flagdata1B = false;
	if($data2[0]%4 == 0) $flagdata2B = true; else $flagdata2B = false;

	
	for($i = 1; $i < $data1[1]; $i++)
	{
		switch (true) {
			case (($i == 1) || ($i == 3) || ($i == 5) || ($i ==  7) || ($i == 8) || ($i == 10) || ($i == 12)): $acumuladorD1 += 31; break;
			
			case (($i == 4) || ($i == 6) || ($i == 9) || ($i == 11)): $acumuladorD1 += 30; break;

			case ($i == 2): if($flagdata1B) $acumuladorD1 += 29; else $acumuladorD1 += 28; break;		

			default: $data1[1] = 0;	break;
		}
	}
	$i = 0;

	for($i = 1; $i < $data2[1]; $i++)
	{
		switch (true) {
			case (($i == 1) || ($i == 3) || ($i == 5) || ($i ==  7) || ($i == 8) || ($i == 10) || ($i == 12)): $acumuladorD2 += 31; break;
			
			case  (($i == 4) || ($i == 6) || ($i == 9) || ($i == 11)): $acumuladorD2 += 30; break;

			case ($i == 2): if($flagdata2B) $acumuladorD2 += 29; else $acumuladorD2 += 28;	break;			

			default: $data2[1] = 0;	break;
		}
	}


	//if($diferencaMes + $diferencaAno) 

	$acumuladorD1 = $acumuladorD1 + $data1[2]; //Transformando horário de abertura em segundos
	$acumuladorD2 = $acumuladorD2 + $data2[2]; //transformando horário de fechamento em segundos

	$resultadoD = $diferencaAno*365 + $dias_bissexto + ($acumuladorD2 - $acumuladorD1);// + $dias_bissexto; // Calculando a diferença entre os horários feito em segundos

	//Calculando diferença dos horários de abertura e fechamento
	$hora1 = explode(":", $hora_abertura_osc); //Transfomando o horario de abetura em um array de 3 posições
	$hora2 = explode(":", $hora_fechamento_osc); //Transfomando o horario de fechamento em um array de 3 posições

	$acumuladorH1 = ($hora1[0] * 3600) + ($hora1[1] * 60);// + $hora1[2]; //Transformando horário de abertura em segundos
	$acumuladorH2 = ($hora2[0] * 3600) + ($hora2[1] * 60);// + $hora2[2]; //transformando horário de fechamento em segundos

	$resultadoH = $acumuladorH2 - $acumuladorH1; // Calculando a diferença entre os horários feito em segundos

	$hora_ponto = floor ($resultadoH / 3600); //Retornando a parcela do valor calculado em horas

	$resultadoH = $resultadoH - ($hora_ponto * 3600); //Remove a parcela respectiva a horas do resultado da diferença dos horários

	$min_ponto = floor ($resultadoH / 60); //Retornando a parcela do valor calculado remanescente em minutos

	$resultadoH = $resultadoH - ($min_ponto * 60); //Remove a parcela respectiva a minutos do resultado da diferença dos horários

	$secs_ponto = $resultadoH; //Retornando a parcela do valor calculado remanescente em segundos

	$hora_ponto = $hora_ponto + $resultadoD*24;


	$calculo_tempo_atendimento = $hora_ponto.":".$min_ponto.":".$secs_ponto; //convertendo os valores em string de horário e atribui a variável

	if($calculo_tempo_atendimento[0] =='-') $calculo_tempo_atendimento = "FALHA NO CALCULO";
	
}
else
	$calculo_tempo_atendimento = 'Não foi possível calcular: ERRO em DATA ou HORA (de Abertura OU de fechamento) da OSC';// aonde isso vai aparecer??


	$sql_cabecalho =  "INSERT INTO table2_osc VALUES ( 
	 Default,
	'$numero_chamado',
	'$cliente', 
	'$mantenedores',
	'$mantenedores_atualizado', 
	'$solicitantes', 
	'$res_area', 
	'$res_contrato', 
	 $data_emissao_aux, 
	'$local', 
	'$centro_custo', 
	'$dados',
	'$telefonia', 
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
	'$item', 
	 $data_abertura_osc_aux, 
	 $hora_abertura_osc_aux, 
	 $data_fechamento_osc_aux, 
	 $hora_fechamento_osc_aux, 
	'$calculo_tempo_atendimento', 
	'$causas_identificadas', 
	'$efeito', 
	'$acao_realizada', 
	'$cartao_de_material', 
	'$qtd', 
	'$status_do_chamado', 
	'$observacao'
	);";

	 

if(mysqli_query($conn, $sql_cabecalho))

	echo "<script>alert('Dados salvos!'); window.location = 'home.php'; </script>";
else
echo "<script>alert('Dados não salvos!'); window.location = 'OSC_Mantenedor.php'; </script>";


mysqli_close($conn);

include ("enviar_email.php");

?>