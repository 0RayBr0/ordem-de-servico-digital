<?php
//pegar dados do banco
include_once ('conexao.php');
if (isset( $_POST['numero_chamado']))
$numero_chamado = $_POST['numero_chamado'];
else 
{ini_set('display_errors', 0 );error_reporting(0);}
{echo "<script>alert('Número do chamado não existente'); window.location = 'home.php'; </script>";};
  
$result_usuario = "SELECT * FROM table2_osc WHERE numero_chamado = '$numero_chamado' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);  
$row_informacoes = mysqli_fetch_assoc($resultado_usuario);  

//condição checkbox
 if($row_informacoes['dados'] == '1') $row_informacoes ['dados'] = "checked" ;
 else $row_informacoes ['dados'] = "";
   
 if($row_informacoes['telefonia'] == '1') $row_informacoes ['telefonia'] = "checked" ;
 else $row_informacoes ['telefonia'] = "";

 if($row_informacoes['circ_fechado_de_tv_CFTV'] == '1') $row_informacoes ['circ_fechado_de_tv_CFTV'] = "checked" ;
 else $row_informacoes ['circ_fechado_de_tv_CFTV'] = "";

 if($row_informacoes['alerta_de_intrusao_SAI'] == '1') $row_informacoes ['alerta_de_intrusao_SAI'] = "checked" ;
 else $row_informacoes ['alerta_de_intrusao_SAI'] = "";

 if($row_informacoes['wan'] == '1') $row_informacoes ['wan'] = "checked" ;
 else $row_informacoes ['wan'] = "";

  if($row_informacoes['pabx'] == '1') $row_informacoes ['pabx'] = "checked" ;
 else $row_informacoes ['pabx'] = "";

 if($row_informacoes['controle_de_acesso_SCA'] == '1') $row_informacoes ['controle_de_acesso_SCA'] = "checked" ;
 else $row_informacoes ['controle_de_acesso_SCA'] = "";

 if($row_informacoes['audio_de_video'] == '1') $row_informacoes ['audio_de_video'] = "checked" ;
 else $row_informacoes ['audio_de_video'] = "";

 if($row_informacoes['lan'] == '1') $row_informacoes ['lan'] = "checked" ;
 else $row_informacoes ['lan'] = "";

 if($row_informacoes['equipamento'] == '1') $row_informacoes ['equipamento'] = "checked" ;
 else $row_informacoes ['equipamento'] = "";


 if($row_informacoes['deteccao_de_incendio_SDI'] == '1') $row_informacoes ['deteccao_de_incendio_SDI'] = "checked" ;
 else $row_informacoes ['deteccao_de_incendio_SDI'] = "";


 if($row_informacoes['outros'] == '1') $row_informacoes ['outros'] = "checked" ;
 else $row_informacoes ['outros'] = "";

//condição radio
$habilitar_radio = "";
$habilitar_radio2 = "";
if($row_informacoes['controle_de_servico'] == 'Contrato')$habilitar_radio = "checked";
if($row_informacoes['controle_de_servico'] == 'Projeto')$habilitar_radio2 = "checked";
/*
$habilitar_radio="";
$habilitar_radio2="";
switch ($habilitar_radio && $habilitar_radio2) {
    case $row_informacoes['controle_de_servico'] == 'Contrato':$habilitar_radio == "checked";
        # code...
        break;
    
    case $row_informacoes['controle_de_servico'] == 'Projeto'$habilitar_radio2 == "checked";

    default:$habilitar_radio = " " && $habilitar_radio2 = "";
        # code...
        break;
}
*/

$habilitar_radio3 = "";
$habilitar_radio4 = "";
$habilitar_radio5 = "";
if($row_informacoes['status_do_chamado'] == 'concluido')
  $habilitar_radio3 = "checked";
if($row_informacoes['status_do_chamado'] == 'suspenso_aguardando_cliente')
  $habilitar_radio4 = "checked";
if($row_informacoes['status_do_chamado'] == 'suspenso_aguardando_centauro')
  $habilitar_radio5 = "checked";

//gerar pdf
//gerar pdf
//require_once("lib/dompdf/dompdf_config.inc.php");
require __DIR__ . '/vendor/autoload.php';
 
 use Dompdf\Dompdf;
 $dompdf = new Dompdf();

use Dompdf\Options;
$options = new Options();

$dompdf = new Dompdf($options);

$htmlContent = "../reports/report-hash.php";
$dompdf->set_option('chroot', 'C:\wamp64\www');
    
//$dompdf->loadHtml($dir_print6);//, LIBXML_HTML_NODEFDTD);

$html = 
'<head>
<link rel="stylesheet" type="text/css" href="gerar_pdf.css" media="all">
</head>

<body>
<header>
<img class="logo" src=".\imagens\logo.png" height="61px" width="150px">

<h1 class="titulo">ORDEM DE SERVIÇO</h1>

<div id="link"> <a class="link" style="color:#8B8989" href="http://www.centaurotelecom.com.br/contato/">www.centaurotelecom.com.br/contato</a>
<br>
<a class="link" style="color:#8B8989" href="http://www.centaurotelecom.com.br/help-desk/">www.centaurotelecom.com.br/help-desk </a> </div>

</header>

<div class="campo1">
<table class="Table1">

<tbody>
<tr>
<td class="bordas_3">Numero do chamado:</td>
<td>  '.$row_informacoes['numero_chamado'].'  </td>

<td class="bordas_3">Solicitante:</td>
<td>  '.$row_informacoes['solicitantes'].'  </td>

<td class="bordas_3">Data de emissão:</td>
<td>  '.$row_informacoes['data_de_emissao'].'  </td>
</tr>

<tr>
<td class="bordas_3">Cliente:</td>
<td>  '.$row_informacoes['cliente'].'  </td>

<td class="bordas_3">Res.da Área:</td>
<td>  '.$row_informacoes['res_area'].'  </td>

<td class="bordas_3">Localização/Área:</td>     
<td>  '.$row_informacoes['local_area'].'  </td>

</tr>
<tr>
 <td class="bordas_3">Mantenedores:</td>
<td>  '.$row_informacoes['mantenedores'].'  </td>

<td class="bordas_3">Resp. do Contrato:</td>
<td>  '.$row_informacoes['res_contrato'].'  </td>

<td class="bordas_3">Centro de custo:</td>
<td>  '.$row_informacoes['centro_de_custo'].'  </td>
</tr>
</tbody>
</table>
</div>

<br>
<div class="campo2">
<table  class="Table2"> 

<thead>
<tr>
<th colspan="8"><h4>CATEGORIA DE ATENDIMENTO </h4></th> 
</tr> 
</thead>
<tbody> 
<tr>
<td class="bordas_3"> Dados </td><td>            
<input type="checkbox" '.$row_informacoes['dados'].'>
</td>

<td class="bordas_3"> Telefonia </td><td>              
<input type="checkbox" '.$row_informacoes['telefonia'].'>
</td>


<td class="bordas_3"> Circ. Fechado de TV (CFTV)</td><td>
<input type="checkbox" '.$row_informacoes['circ_fechado_de_tv_CFTV'].' >
</td> 
           
<td class="bordas_3"> Alerta de Intrusão (SAI) </td><td>
<input type="checkbox" '.$row_informacoes['alerta_de_intrusao_SAI'].' >
</td>
</tr>

<tr>
<td class="bordas_3"> WAN </td><td>
<input type="checkbox" '.$row_informacoes['wan'].'>                
</td>
    
<td class="bordas_3"> PABX </td><td>
<input type="checkbox" '.$row_informacoes['pabx'].'>
</td>

<td class="bordas_3"> Controle de Acesso (SCA) </td><td>
<input type="checkbox" '.$row_informacoes['controle_de_acesso_SCA'].'>
</td>

<td class="bordas_3"> Áudio e Vídeo (SON) </td><td>
<input type="checkbox" '.$row_informacoes['audio_de_video'].'> 
</td>
</tr>

<tr>
<td class="bordas_3"> LAN </td><td>
<input type="checkbox" '.$row_informacoes['lan'].'> 
</td>

<td class="bordas_3"> Equipamento </td><td>
<input type="checkbox" '.$row_informacoes['equipamento'].'>   
</td>

<td class="bordas_3"> Detecção de Incêndio (SDAI) </td><td> 
<input type="checkbox" '.$row_informacoes['deteccao_de_incendio_SDI'].'>    
</td>

<td class="bordas_3"> Outros </td><td>
<input type="checkbox" '.$row_informacoes['outros'].' ></td>
</tr>
</tbody>
</table>
</div>
<br>


<div class="campo3">
<table  class="Table3">

<thead>
<tr>
<th class="borda3" colspan="5"><h4>CONTROLE DE SERVIÇO</h4></th> 
</tr>
</thead>

<tbody>
<tr>
<td>Tipo:</td>
<td> <input type="radio" '.$habilitar_radio.'> Contrato (Manutenção / LPU) </td>
<td> <input type="radio" '.$habilitar_radio2.'> Projeto de Engenharia </td>
<td colspan="2">Número:</td>
</tr>

<tr>
<td  class="bordas_3"  colspan="3"> <h4><u>Descrição do chamado:</u></h4> </td>
<td colspan="2" class="bordas "><h4>CARTÃO DE TEMPO</h4></td>
</tr>

<tr>
<td colspan="3" rowspan="5"><textarea rows="7">'.$row_informacoes['descricao_do_chamado'].'</textarea</td>

<td class="bordas_2" >Data de Abertura da O.S:</td>
<td> '.$row_informacoes['data_abertura_osc'].' </td>
</tr>

<tr>
<td class="bordas">Hora de Abertura da O.S: </td>
<td> '.$row_informacoes['hora_abertura_osc'].' </td>
</tr>

<tr>
<td class="bordas_2">Data de Fechamento da O.S:</td>
<td> '.$row_informacoes['data_fechamento_osc'].' </td>
</tr>

<tr>
<td class="bordas">Hora de Fechamento da O.S:</td>
<td> '.$row_informacoes['hora_fechamento_osc'].' </td>
</tr>

<tr><td  colspan="2" class="bordas_3">Calculo do tempo de atendimento:</td></tr>

<tr>
<td class="bordas_3"><b> TAG do Equipamento:</b>
<td> '.$row_informacoes['tag_equip'].' </td>

<td class="bordas_3"> <b>ITEM ou Sub Tag:</b></td>
<td> '.$row_informacoes['item'].' </td>

<td> calculo </td>
</tr>

</tbody>
</table>
</div>
<br>

<div class="campo4">
<table  class="Table4">
<thead>
<tr>
<th class="bordas"><h4> CAUSAS IDENTIFICADAS</h4></th>
<th class="bordas"><h4> EFEITO</h4></th>
</tr>
</thead> 

<tbody>
<tr>
<td><textarea rows="7">'.$row_informacoes['causas_identificadas'].'</textarea></td>
<td><textarea rows="7">'.$row_informacoes['efeito'].'</textarea></td>
</tr>
</tbody>
</table>    
</div>
<br>

<div class="campo5">
<table class="Table5">
<thead>
<tr> 
<th class="bordas"><h4> AÇÃO REALIZADA</h4></th>
<th class="bordas"><h4> CARTÃO DE MATERIAL</h4></th>
<th class="bordas"><h4> QDE.</h4></th>
</tr>
</thead>

<tbody>
<tr>
<td><textarea rows="7">'.$row_informacoes['acao_realizada'].'</textarea></td>
<td><textarea rows="7">'.$row_informacoes['cartao_material'].'</textarea></td>
<td><textarea rows="7">'.$row_informacoes['qtd'].'</textarea></td></tr>
</tbody>
</table>
</div>
<br>

<div class="campo6">
<table class="Table6"> 
<thead>
<tr>
<th class="bordas" colspan="3"><h4> STATUS DO CHAMADO</h4></th>
</tr>
</thead>

<tbody>
<tr class="bordas_2">
<td> <input type="radio" value="concluido" '.$habilitar_radio3.'>
<label >Concluído</td>

<td> <input type="radio" value="suspenso_aguardando_cliente" '.$habilitar_radio4.'>
 Suspenso aguardando cliente(ou Terceiros)</td>

<td> <input type="radio" value="suspenso_aguardando_centauro" '.$habilitar_radio5.'>
 Suspenso aguardando Centauro (ou Fabricante)</td>
</tr>
</tbody>

</table>
</div>
<br>

<div class="campo7">
<table class="Table7">
<thead>
<tr>
<th class="bordas"><h4>OBSERVAÇÃO</h4></th>
</tr>
</thead>

<tbody>
<tr>
<td><textarea rows="10" id="observacao" name="observacao" >'.$row_informacoes['observacao'].'</textarea></td>
</tr>
</tbody>
</table>  
<br>
</div>
<br>

</div>
</body>
';  
   
$dompdf->loadhtml($html);

$dompdf->setPaper('a4', 'portraip');//por que o landscape não funciona em osc_tecnico????

$dompdf->render();
 
//Preparando o nome do arquivo
$cliente = $row_informacoes['cliente'];
$dataNomeArquivo = explode("-",$row_informacoes['data_de_emissao']);

$nomecliente = $cliente;
include "F5_nomecliente.php";

//if($row_informacoes['dados'] == 1) $categoria = $categoria = "- Dados";
$categoria = "";
if($row_informacoes['dados'] == "checked") $categoria = $categoria . " - Dados";
if($row_informacoes['telefonia'] == "checked") $categoria = $categoria . " - TEL";
if($row_informacoes['circ_fechado_de_tv_CFTV'] == "checked") $categoria = $categoria . " - CFTV";
if($row_informacoes['alerta_de_intrusao_SAI'] == "checked") $categoria = $categoria . " - SAI";
if($row_informacoes['wan'] == "checked") $categoria = $categoria . " - Wan";
if($row_informacoes['pabx'] == "checked") $categoria = $categoria . " - Pabx";
if($row_informacoes['controle_de_acesso_SCA'] == "checked") $categoria = $categoria . " - SCA";
if($row_informacoes['audio_de_video'] == "checked") $categoria = $categoria . " - Video";
if($row_informacoes['lan'] == "checked") $categoria = $categoria . " - Lan";
if($row_informacoes['equipamento'] == "checked") $categoria = $categoria . " - Equip";
if($row_informacoes['deteccao_de_incendio_SDI'] == "checked") $categoria = $categoria . " - SDAI";
if($row_informacoes['outros'] == "checked") $categoria = $categoria . " - Outros";


//$nome_arquivo = $_FILES['arquivo']['name'];

$ano_temp = $dataNomeArquivo[0];
$mes_temp = $dataNomeArquivo[1];
$dia_temp = $dataNomeArquivo[2];

$nomeArquivo =  'OS ' . $nomecliente . ' ' . $ano_temp . $mes_temp . ' - Dia ' . $dia_temp . ' - ' . $numero_chamado . $categoria . '.pdf';
//Preparando o diretório onde será salvo o arquivo
$folder = 'C:/wamp64/www/mutavel/pdfs/'.$cliente.'/';



//Salvar no banco de dados para registrar o log da emissão da O.S.C. Digital em arquivo
$result = "INSERT INTO osc_pdfs (cliente, arquivo,data) VALUES ('$nomecliente', '$nomeArquivo',CURRENT_TIMESTAMP)";
$resultado = mysqli_query($conn, $result);
$ultimo_id = mysqli_insert_id($conn);
//echo "Ultimo Id Inserido: $ultimo_id <br>";

//Definindo a pasta onde o arquivo vai ser salvo
if(empty($cliente)) 
  $_UP['pasta'] = 'C:/wamp64/www/mutavel/pdfs/Cliente não encontrado/';
else
  if(file_exists($folder))
    $_UP['pasta'] ='C:/wamp64/www/mutavel/pdfs/'.$cliente.'/';
  else 
    mkdir($_UP['pasta'] = 'C:/wamp64/www/mutavel/pdfs/'.$cliente.'/', 0777); //0777 - cód. para criar diretórios
 
     if(file_put_contents($_UP['pasta'].$nomeArquivo))
     {
          echo "Imagem salva com sucesso!<br>";
          //fclose($arquivo); 
     }
  /*
  */


ob_end_clean();
$dompdf->stream($nomeArquivo, array("Attachment" => false));/* força o browser a fornecer a visualisação do pdf antes do dowload . caso contrário trocar para true */
// Enviando o PDF para o browser

?>

